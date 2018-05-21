<?php 
/*
Template Name: My Profile
*/
get_header();



$user_id = get_current_user_id();
$all_meta_for_user = get_user_meta( $user_id );
$user_info = get_userdata( $user_id ); 

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
          <li>My Account</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Page Banner -->


<div class="container">
  <div class="row">
    <br><br>
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">
          <h1>My Account Info:</h1>
        </div>
        <div class="col-md-6 text-right">
          <a href="<?php echo site_url('/edit-profile/');?>"><button type="button" class="btn btn-primary btn-sm">Edit account</button></a>
        </div>
      </div>
    </div>
    
    <br><br>
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Value</th>
          </tr>
        </thead>

        <tbody>
          <?php if(isset($all_meta_for_user['custom_user_profile_pic'][0]) && $all_meta_for_user['custom_user_profile_pic'][0]!=""){?>
          <tr>
            <td>profile pic</td>
            <td><img width="200" src="<?php echo get_site_url().'/wp-content/uploads/profile_pic/'.$all_meta_for_user['custom_user_profile_pic'][0];?>" alt=""></td>
          </tr>  
          <?php } ?>   
          <?php if(isset($all_meta_for_user['custom_user_name'][0]) && $all_meta_for_user['custom_user_name'][0]!=""){?>               
          <tr>
            <td>name</td>
            <td><?php echo $all_meta_for_user['custom_user_name'][0];?></td>
          </tr>
          <?php } ?>
          <?php if(isset($all_meta_for_user['custom_user_phone'][0]) && $all_meta_for_user['custom_user_phone'][0]!=""){?>           
          <tr>
            <td>phone</td>
            <td><?php echo $all_meta_for_user['custom_user_phone'][0];?></td>
          </tr>
          <?php } ?>
          <?php if(isset($all_meta_for_user['custom_user_registration_number'][0]) && $all_meta_for_user['custom_user_registration_number'][0]!=""){?>             
          <tr>
            <td>registration number</td>
            <td><?php echo $all_meta_for_user['custom_user_registration_number'][0];?></td>
          </tr>
          <?php } ?>
          <?php if(isset($all_meta_for_user['custom_user_account_type'][0]) && $all_meta_for_user['custom_user_account_type'][0]!=""){?>             
          <tr>
            <td>account type</td>
            <td><?php echo $all_meta_for_user['custom_user_account_type'][0];?></td>
          </tr>
          <?php } ?>
          <?php if(isset($all_meta_for_user['custom_user_about_me'][0]) && $all_meta_for_user['custom_user_about_me'][0]!=""){?>             

          <tr>
            <td>about me</td>
            <td><?php echo $all_meta_for_user['custom_user_about_me'][0];?></td>
          </tr>
          <?php } ?>
          <?php if(isset($all_meta_for_user['custom_user_about_work'][0]) && $all_meta_for_user['custom_user_about_work'][0]!=""){?>             
          <tr>
            <td>about work</td>
            <td><?php echo $all_meta_for_user['custom_user_about_work'][0];?></td>
          </tr>
          <?php } ?>
          <?php if(isset($all_meta_for_user['custom_user_youtube'][0]) && $all_meta_for_user['custom_user_youtube'][0]!=""){?>             
          <tr>
            <td>youtube</td>
            <td><?php echo $all_meta_for_user['custom_user_youtube'][0];?></td>
          </tr>
          <?php } ?>
          <?php if(isset($all_meta_for_user['custom_user_facebook'][0]) && $all_meta_for_user['custom_user_facebook'][0]!=""){?>             
          <tr>
            <td>facebook</td>
            <td><?php echo $all_meta_for_user['custom_user_facebook'][0];?></td>
          </tr>
          <?php } ?>
          <?php if(isset($all_meta_for_user['custom_user_facebook_page'][0]) && $all_meta_for_user['custom_user_facebook_page'][0]!=""){?>             
          <tr>
            <td>facebook page</td>
            <td><?php echo $all_meta_for_user['custom_user_facebook_page'][0];?></td>
          </tr>
          <?php } ?>
          <?php if(isset($all_meta_for_user['custom_user_twitter'][0]) && $all_meta_for_user['custom_user_twitter'][0]!=""){?>             
          <tr>
            <td>twitter</td>
            <td><?php echo $all_meta_for_user['custom_user_twitter'][0];?></td>
          </tr>
          <?php } ?>
          <?php if(isset($all_meta_for_user['custom_user_pinterest'][0]) && $all_meta_for_user['custom_user_pinterest'][0]!=""){?>             
          <tr>
            <td>pinterest</td>
            <td><?php echo $all_meta_for_user['custom_user_pinterest'][0];?></td>
          </tr>
          <?php } ?>           

        </tbody>
      </table>      

    </div>


  </div>
</div>
<?php //get_footer();?> 