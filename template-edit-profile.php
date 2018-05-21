<?php 
/*
Template Name: Edit Profile
*/
get_header();

//get user current meta
$user_id = get_current_user_id();
$all_meta_for_user = get_user_meta( $user_id );
$user_info = get_userdata( $user_id ); 



  $message="";
  if(isset($_POST["submit"])){  
    $nonce = $_REQUEST['_wpnonce'];
    if (wp_verify_nonce( $nonce, 'hiddent_csrf_check' ) ) {
      update_user_meta( $user_id, 'custom_user_name', $_POST['custom_user_name']);
      update_user_meta( $user_id, 'custom_user_phone', $_POST['custom_user_phone']);
      update_user_meta( $user_id, 'custom_user_registration_number', $_POST['custom_user_registration_number']);
      update_user_meta( $user_id, 'custom_user_about_me', $_POST['custom_user_about_me']);
      update_user_meta( $user_id, 'custom_user_about_work', $_POST['custom_user_about_work']);
      update_user_meta( $user_id, 'custom_user_youtube', $_POST['custom_user_youtube']);
      update_user_meta( $user_id, 'custom_user_facebook', $_POST['custom_user_facebook']);
      update_user_meta( $user_id, 'custom_user_facebook_page', $_POST['custom_user_facebook_page']);
      update_user_meta( $user_id, 'custom_user_twitter', $_POST['custom_user_twitter']);
      update_user_meta( $user_id, 'custom_user_pinterest', $_POST['custom_user_pinterest']);

      //check the file empty or not
      if(isset($_FILES['custom_user_profile_pic']) && ($_FILES['custom_user_profile_pic']['size'] > 0)) {
        $file = $_FILES['custom_user_profile_pic']['tmp_name'];
        // Get the type of the uploaded file. This is returned as "type/extension"
        $arr_file_type = wp_check_filetype(basename($_FILES['custom_user_profile_pic']['name']));
        $uploaded_file_type = $arr_file_type['type'];

        // Set an array containing a list of acceptable formats
        $allowed_file_types = array('image/jpg','image/jpeg','image/gif','image/png');
        // If the uploaded file is the right format
        if(in_array($uploaded_file_type, $allowed_file_types)) {
          
          if(isset($_FILES['custom_user_profile_pic'])){
            $file = $_FILES['custom_user_profile_pic']['tmp_name'];
            $image = addslashes(file_get_contents($_FILES['custom_user_profile_pic']['tmp_name']));
            $image_name = addslashes($_FILES['custom_user_profile_pic']['name']);
            $image_name_next = uniqid().'_'.$image_name;
            $image_size = getimagesize($_FILES['custom_user_profile_pic']['tmp_name']);
            if($image_size==false){
              echo 'This is not a image';
            }else{    
              if(move_uploaded_file($_FILES['custom_user_profile_pic']["tmp_name"],ABSPATH . "wp-content/uploads/profile_pic/" . $_FILES['custom_user_profile_pic']["name"])){
                rename(ABSPATH . "wp-content/uploads/profile_pic/$image_name",ABSPATH . "wp-content/uploads/profile_pic/$image_name_next");
                // update the image
                update_user_meta( $user_id, 'custom_user_profile_pic', $image_name_next);
              }
              else{
                echo 'Error: Image not uploaded in folder';
              }
            }
          }
        }else{
          die('image type not allowed');
        }
      }
      wp_redirect( site_url("/my-account/") );
      exit;
    }else{

      exit; // CSRF attack

    }
  }


?> 
<!-- Start Page Banner -->
<div class="page-banner" style="padding:40px 0; background-color: #12477B; color: white;">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <li><a href="#">Home</a></li>
          <li>Edit Account</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Page Banner -->


<div class="container">
  <div class="row">
    <br>
    <br>
    <div class="col-md-8 col-md-offset-2">
      <form class="form-horizontal" role="form" method="post"  enctype="multipart/form-data"> 
        <fieldset>

          <!-- Form Name -->
          <legend>Edit Account Info</legend>

          <?php echo $message;?>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Name</label>
            <div class="col-sm-10">
              <input type="text" name="custom_user_name" value="<?php echo $all_meta_for_user['custom_user_name'][0];?>" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Phone</label>
            <div class="col-sm-10">
              <input type="text" name="custom_user_phone" value="<?php echo $all_meta_for_user['custom_user_phone'][0];?>" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Registration Number</label>
            <div class="col-sm-10">
              <input type="text" name="custom_user_registration_number" value="<?php echo $all_meta_for_user['custom_user_registration_number'][0];?>" class="form-control">
            </div>
          </div>
  
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">About me</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="custom_user_about_me"><?php echo $all_meta_for_user['custom_user_about_me'][0];?></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">About Work</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="custom_user_about_work"><?php echo $all_meta_for_user['custom_user_about_work'][0];?></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Youtube</label>
            <div class="col-sm-10">
              <input type="text" name="custom_user_youtube" value="<?php echo $all_meta_for_user['custom_user_youtube'][0];?>" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Facebook</label>
            <div class="col-sm-10">
              <input type="text" name="custom_user_facebook" value="<?php echo $all_meta_for_user['custom_user_facebook'][0];?>" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Facebook Page</label>
            <div class="col-sm-10">
              <input type="text" name="custom_user_facebook_page" value="<?php echo $all_meta_for_user['custom_user_facebook_page'][0];?>" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Twiter</label>
            <div class="col-sm-10">
              <input type="text" name="custom_user_twitter" value="<?php echo $all_meta_for_user['custom_user_twitter'][0];?>" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Pinterest</label>
            <div class="col-sm-10">
              <input type="text" name="custom_user_pinterest" value="<?php echo $all_meta_for_user['custom_user_pinterest'][0];?>" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Profile Picture</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" name="custom_user_profile_pic">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <a href="<?php echo site_url('/my-account/');?>"><button type="button" class="btn btn-default">Cancel</button></a>
                <button type="submit" class="btn btn-primary" name="submit">Save</button>
              </div>
            </div>
          </div>
          <?php wp_nonce_field( 'hiddent_csrf_check' );?>
        </fieldset>











      </form>
    </div><!-- /.col-lg-12 -->
  </div><!-- /.row -->
</div>


<?php get_footer();?> 