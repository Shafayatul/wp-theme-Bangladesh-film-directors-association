<?php 
/*
Template Name: signup
*/
get_header();
$message="";
  if(isset($_POST["Login"])){  
    $nonce = $_REQUEST['_wpnonce'];
    if (wp_verify_nonce( $nonce, 'hiddent_csrf_check' ) ) {

      $user_name = sanitize_text_field( $_POST["email"] );
      $password = $_POST["password"];
      $password_confirmation = $_POST["password_confirmation"];
      $user_email = sanitize_email( $_POST["email"] );

      // email valid
      if (!filter_var($user_email, FILTER_VALIDATE_EMAIL) === false) {

        // passwords match
        if($password == $password_confirmation){

           
          $user_id = username_exists( $user_name );
          if ( !$user_id and email_exists($user_email) == false ) {
            $user_id = wp_create_user( $user_name, $password, $user_email );

            add_user_meta( $user_id, 'custom_user_name', $_POST['user_name']);
            add_user_meta( $user_id, 'custom_user_phone', $_POST['phone']);
            add_user_meta( $user_id, 'custom_user_registration_number', $_POST['registration_number']);
            add_user_meta( $user_id, 'custom_user_designation', '');
            
            add_user_meta( $user_id, 'custom_user_account_type', '');
            add_user_meta( $user_id, 'custom_user_profile_pic', '');
            add_user_meta( $user_id, 'custom_user_long_bio', '');
            add_user_meta( $user_id, 'custom_user_about_work', '');
            add_user_meta( $user_id, 'custom_user_youtube', '');
            add_user_meta( $user_id, 'custom_user_facebook', '');
            add_user_meta( $user_id, 'custom_user_facebook_page', '');
            add_user_meta( $user_id, 'custom_user_twitter', '');
            add_user_meta( $user_id, 'custom_user_pinterest', '');
            add_user_meta( $user_id, 'custom_user_vimeo', '');
            add_user_meta( $user_id, 'custom_user_personal_website', '');
            add_user_meta( $user_id, 'custom_user_company_website', '');


            // log in after sign in
            //$message = greenClientLogin();
            wp_set_current_user( $user_id);
            wp_set_auth_cookie( $user_id, true, false );
            do_action( 'wp_login', $user_name );
            wp_redirect( site_url("/my-profile/") );
            exit;
            
          }else{
            $message = '
            <div class="alert alert-danger">
              <strong>Error!</strong> Please change the email.
            </div>';         
          }
        }else{

          // passwords do not match
          $message = '<div class="alert alert-danger">
                        <strong>Error!</strong> Passwords do not match.</span>
                      </div>';         

        }
      } else {

        // email not valid
        $message = '<div class="alert alert-danger">
                        <strong>Error!</strong> '.$user_email.'  is not a valid email address.
                    </div>';   

      }

    }else{

      exit; // CSRF attack

    }
  }
?> 
<div class="container">
    <br>
    <br>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign Up for New Account</h1>
            <div class="account-wall">
                <form class="form-signin" method="post">
                <?php echo $message;?>
                <input type="text" class="form-control" placeholder="Name" name="user_name" required>
                <br>
                <input type="email" class="form-control" placeholder="Email" name="email" required>
                <br>
                <input type="text" class="form-control" placeholder="Registration Number" name="registration_number" required>
                <br>
                <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                <br>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <br>
                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                <!-- <div class="form-group">
                  <label for="account_type">Account Type:</label>
                  <select class="form-control" id="account_type" name="account_type">
                    <option value="Executive Member">Executive Member</option>
                    <option value="Life Time Member">Life Time Member</option>
                    <option value="Member">Member</option>
                    <option value="Associate Member">Associate Member</option>
                    <option value="Primary Member">Primary Member</option>
                  </select>
                </div> -->
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="Login">Sign Up</button>
                <?php wp_nonce_field( 'hiddent_csrf_check' );?>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('.url_nav>a').removeClass('active');
    jQuery('.signup').addClass('active');
  });
</script>
<?php get_footer();?>