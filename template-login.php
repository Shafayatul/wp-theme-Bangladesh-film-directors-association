<?php 
/*
Template Name: Login
*/
get_header();

  if(isset($_POST["Login"])){  
    $nonce = $_REQUEST['_wpnonce'];
    if (wp_verify_nonce( $nonce, 'hiddent_csrf_check' ) ) { 

      $user_password  = esc_attr($_POST["user_password"]);
      $user_login     = esc_attr($_POST["user_email"]);

      $creds = array();
      $creds['user_login'] = $user_login;
      $creds['user_password'] = $user_password;
      $creds['remember'] = true;

      $user = wp_signon( $creds, false );

      $userID = $user->ID;

      if(is_numeric($userID)){
        wp_set_current_user( $userID);
        wp_set_auth_cookie( $userID, true, false );
        do_action( 'wp_login', $user_login );
        if(is_user_logged_in()){
          wp_redirect( site_url("/home/") );
          exit;
        }    
      }else{
        $message = '<div data-alert="" class="alert-box alert alert-show">
          <span>User email or password not correct. Please try again.</span>
            <a class="close">×</a>
          </div>';    
      }
    }
  }
?> 
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to your account</h1>
            <div class="account-wall">

                <?php echo $message;?>

                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" method="post">
                <input type="text" class="form-control" placeholder="Email" name="user_email" required autofocus>
                <input type="password" class="form-control" placeholder="Password" name="user_password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="Login">Sign in</button>
                <?php wp_nonce_field( 'hiddent_csrf_check' );?>
<!--                 <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label> -->
                <!-- <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span> -->
                </form>
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>

<?php get_footer();?> 
