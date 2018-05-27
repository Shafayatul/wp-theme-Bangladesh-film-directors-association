<?php 
/*
Template Name: Login
*/
get_header();
$message="";
  if(isset($_POST["Login"])){  
    $nonce = $_REQUEST['_wpnonce'];
    if (wp_verify_nonce( $nonce, 'hiddent_csrf_check' ) ) { 

      $user_password  = esc_attr($_POST["user_password"]);
      $user_login     = esc_attr($_POST["user_email"]);

      $creds = array();
      $creds['user_login'] = $user_login;
      $creds['user_password'] = $user_password;
      if($_POST['remember'] = 1){
        $creds['remember'] = true;
      }else{
        $creds['remember'] = false;
      }
      

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
        $message = '
        <div class="alert alert-danger">
          <strong>Error!</strong> User email or password not correct. Please try again.
        </div>';    
      }
    }
  }
?> 
<div class="container">
    <br>
    <br>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
              <h1 class="text-center login-title">Sign in to your account</h1>
              <form class="form-signin" method="post">
                <div class="row">
                  <div class="col-sm-12 text-center">
                    <img id="profile-img" class="img-circle" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png">
                  </div>
                </div>
                <?php echo $message;?>
                <input type="text" class="form-control" placeholder="Email" name="user_email" required autofocus>
                <br>
                <input type="password" class="form-control" placeholder="Password" name="user_password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="Login">Sign in</button>
                <?php wp_nonce_field( 'hiddent_csrf_check' );?>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="1" name="remember">
                    Remember me
                </label>
                <a href="<?php echo wp_lostpassword_url(); ?>" class="pull-right need-help">Forgot Password? </a><span class="clearfix"></span>
              </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?> 

