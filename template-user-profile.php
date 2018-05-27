<?php 
/*
Template Name: User Profile
*/
get_header();



$user_id = $_GET['id'];
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
          <li><a href="#">User Profile</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Page Banner -->
<div class="container">    
    <br>
    <br>
    <br>
      <div class="row">
          <div class="panel panel-default">
          <div class="panel-heading">  <br><h4 >  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;User Profile</h4><br></div>
           <div class="panel-body">
          <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
          <?php 
          if(isset($all_meta_for_user['custom_user_profile_pic'][0]) && $all_meta_for_user['custom_user_profile_pic'][0]!=""){
          ?>
            <img  src="<?php echo get_site_url().'/wp-content/uploads/profile_pic/'.$all_meta_for_user['custom_user_profile_pic'][0];?>"   id="profile-image1" class="img-responsive img-thumbnail"></td>
          <?php }else{ ?>  
           <img alt="User Pic" src="<?php echo get_template_directory_uri(); ?>/images/avatar_2x.png" id="profile-image1" class="img-circle img-responsive"> 
          <?php } ?>
         
     
          </div>
          <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
              <div class="container" >
                <h2><?php echo $all_meta_for_user['custom_user_name'][0];?></h2>
                <?php 
                if(isset($all_meta_for_user['custom_user_designation'][0]) && $all_meta_for_user['custom_user_designation'][0]!=""){
                ?>
                <p><b><?php echo $all_meta_for_user['custom_user_designation'][0];?></b></p>
              <?php } ?>
              
               
              </div>
               <hr>
                <?php if(isset($all_meta_for_user['custom_user_phone'][0]) && $all_meta_for_user['custom_user_phone'][0]!=""){?>           
                <p><b>Phone: </b><?php echo $all_meta_for_user['custom_user_phone'][0];?></p>
                <?php } ?>          

                <?php if(isset($all_meta_for_user['custom_user_registration_number'][0]) && $all_meta_for_user['custom_user_registration_number'][0]!=""){?>             
                <p><b>Registration Number: </b><?php echo $all_meta_for_user['custom_user_registration_number'][0];?></p>
                
                <?php } ?>
                <?php if(isset($all_meta_for_user['custom_user_account_type'][0]) && $all_meta_for_user['custom_user_account_type'][0]!=""){?>             
                <p><b>Account Type: </b><?php echo implode(", ",$all_meta_for_user['custom_user_account_type']);?></p>
                <?php } ?>

                <?php if(isset($all_meta_for_user['custom_user_long_bio'][0]) && $all_meta_for_user['custom_user_long_bio'][0]!=""){?>             
                <p><b>Biography: </b><?php echo $all_meta_for_user['custom_user_long_bio'][0];?></p>
                <?php } ?>

                <?php if(isset($all_meta_for_user['custom_user_about_work'][0]) && $all_meta_for_user['custom_user_about_work'][0]!=""){?>             
                <p><b>About Work: </b><?php echo $all_meta_for_user['custom_user_about_work'][0];?></p>
                <?php } ?>

                <ul class="social-list">

                  <?php if(isset($all_meta_for_user['custom_user_youtube'][0]) && $all_meta_for_user['custom_user_youtube'][0]!=""){?>     
                    <li>
                      <a class="google itl-tooltip" data-placement="bottom" title="" href="<?php echo $all_meta_for_user['custom_user_youtube'][0];?>" data-original-title="Youtube"><i class="fa fa-youtube-play"></i></a>
                    </li> 
                  <?php } ?>
                  <?php if(isset($all_meta_for_user['custom_user_facebook'][0]) && $all_meta_for_user['custom_user_facebook'][0]!=""){?>      
                    <li>
                      <a class="facebook itl-tooltip" data-placement="bottom" title="" href="<?php echo $all_meta_for_user['custom_user_facebook'][0];?>" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                  <?php } ?>
                  <?php if(isset($all_meta_for_user['custom_user_facebook_page'][0]) && $all_meta_for_user['custom_user_facebook_page'][0]!=""){?>             
                    <li>
                      <a class="facebook itl-tooltip" data-placement="bottom" title="" href="<?php echo $all_meta_for_user['custom_user_facebook_page'][0];?>" data-original-title="Facebook Page"><i class="fa fa-facebook"></i></a>
                    </li>
                  <?php } ?>
                  <?php if(isset($all_meta_for_user['custom_user_twitter'][0]) && $all_meta_for_user['custom_user_twitter'][0]!=""){?> 
                    <li>
                      <a class="twitter itl-tooltip" data-placement="bottom" title="" href="<?php echo $all_meta_for_user['custom_user_twitter'][0];?>" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                    </li>
                  <?php } ?>
                  
                  <?php if(isset($all_meta_for_user['custom_user_pinterest'][0]) && $all_meta_for_user['custom_user_pinterest'][0]!=""){?>  
                    <li>
                      <a class="google itl-tooltip" data-placement="bottom" title="" href="<?php echo $all_meta_for_user['custom_user_pinterest'][0];?>" data-original-title="Pinterest"><i class="fa fa-pinterest-p"></i></a>
                    </li>
                  <?php } ?>   
            
                  <?php if(isset($all_meta_for_user['custom_user_vimeo'][0]) && $all_meta_for_user['custom_user_vimeo'][0]!=""){?>  
                    <li>
                      <a class="google itl-tooltip" data-placement="bottom" title="" href="<?php echo $all_meta_for_user['custom_user_vimeo'][0];?>" data-original-title="vimeo"><i class="fa fa-vimeo"></i></a>
                    </li>
                  <?php } ?>   
                                               
                  <?php if(isset($all_meta_for_user['custom_user_personal_website'][0]) && $all_meta_for_user['custom_user_personal_website'][0]!=""){?>  
                    <li>
                      <a class="google itl-tooltip" data-placement="bottom" title="" href="<?php echo $all_meta_for_user['custom_user_personal_website'][0];?>" data-original-title="Personal website"><i class="fa fa-rss"></i></a>
                    </li>
                  <?php } ?>   
                                               
                  <?php if(isset($all_meta_for_user['custom_user_company_website'][0]) && $all_meta_for_user['custom_user_company_website'][0]!=""){?>  
                    <li>
                      <a class="google itl-tooltip" data-placement="bottom" title="" href="<?php echo $all_meta_for_user['custom_user_company_website'][0];?>" data-original-title="Company"><i class="fa fa-rss"></i></a>
                    </li>
                  <?php } ?>      
                                            
                </ul>
          </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('.url_nav>a').removeClass('active');
    // jQuery('.member-page').addClass('active');
  });
</script>
<?php get_footer();?> 