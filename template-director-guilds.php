<?php 
/*
Template Name: Director Guilds
*/
get_header();
?>   
<div class="page-banner" style="padding:40px 0; background-color: #12477B; color: white;">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <li><a href="#">Home</a></li>
          <li><a href="#">Members</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>    
<div class="container">


  <div class="row">
    <div class="col-md-12">
      <h2 class="colored-title center-text"><a  href="<?php echo site_url('/list-view/').'?type=Executive Member';?>">Executive Member</a></h2>
      <hr>
    </div>    
    
    <div class="col-xs-12">
      <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
          <?php 
            $members = get_user_meta(1,'custom_executive_serial', true);
            $members = explode(',', $members);
            $cnt = count($members);
            if ($cnt!=0) {
          ?>

          <div class="item item-a active">
            <ul class="thumbnails">  
            <?php     
            $x=1;
            $finish_required = true;         
            foreach ($members as $key => $val) {
              $user_id = $val;
              if(get_user_meta($user_id, 'custom_is_active', true) == 1){
              $all_meta_for_user = get_user_meta( $user_id );
              $user_info = get_userdata( $user_id );
            ?>

              <li class="col-sm-3">
                <div class="fff">
                  <div class="thumbnail">
                    <a href="#">
                      <?php if(isset($all_meta_for_user['custom_user_profile_pic'][0]) && $all_meta_for_user['custom_user_profile_pic'][0]!=""){?>     
                        <img style="height: 200px; width: 100%;" src="<?php echo get_site_url().'/wp-content/uploads/profile_pic/'.$all_meta_for_user['custom_user_profile_pic'][0];?>" alt="">
                      <?php }else{ ?>            
                          <img style="height: 200px; width: 100%;" src="<?php echo get_template_directory_uri(); ?>/images/avatar_2x.png" alt="">          
                      <?php } ?>                      
                    </a>
                  </div>
                  <div class="caption">
                    <h4><?php echo $all_meta_for_user['custom_user_name'][0];?></h4>
                    <p><?php echo $all_meta_for_user['custom_user_name'][0];?></p>
                    <p class="text-right">
                      <a class="btn btn-primary btn-xs " href="<?php echo site_url('/user-profile/').'?id='.$user_id;?>">» Detail</a>
                    </p>
                  </div>
                </div>
              </li>

          <?php
          //last loop
          if($x==$cnt){
          ?>
            </ul>
          </div><!-- /Slide1 --> 
          <?php
          }elseif ($x%4==0) {
          ?>
            </ul>
          </div><!-- /Slide1 --> 
          <!-- start new slider -->
          <div class="item item-a">
            <ul class="thumbnails">          
          <?php
          }
          $x++;
        }
        }
      }
          ?>
        </div>
        <nav>
          <ul class="control-box pager">
            <li class="slider-arrow" target-class="item-a" id="minus"><a><i class="fa fa-angle-double-left"></i></a></li>
            <li class="slider-arrow" target-class="item-a" id="plus"><a><i class="fa fa-angle-double-right"></i></a></li>
          </ul>
        </nav>
        </div><!-- /#myCarousel -->
      </div><!-- /.col-xs-12 -->    
      <p class="text-center">
        <a class="btn btn-primary btn-xs " href="<?php echo site_url('/list-view/').'?type=Life Time Member';?>">View All</a>
      </p>        
    </div>      <!-- row -->





    <!-- End of Executive Member -->


  <div class="row">
    <div class="col-md-12">
      <h2 class="colored-title center-text"><a  href="<?php echo site_url('/list-view/').'?type=Life Time Member';?>">Life Time Member</a></h2>
      <hr>
    </div>    
    
    <div class="col-xs-12">
      <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
          <?php 
            global $wpdb;
            $table_name = $wpdb->prefix . 'usermeta';
            $members = $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE meta_value = 'Life Time Member' AND meta_key='custom_user_account_type'", OBJECT );
            $cnt = count($members);
            if ($cnt!=0) {
          ?>

          <div class="item item-b active">
            <ul class="thumbnails">  
            <?php     
            $x=1;
            $cnt = count($members);
            $finish_required = true;         
            foreach ($members as $member) {
              $user_id = $member->user_id;
              if(get_user_meta($user_id, 'custom_is_active', true) == 1){
              $all_meta_for_user = get_user_meta( $user_id );
              $user_info = get_userdata( $user_id );
            ?>

              <li class="col-sm-3">
                <div class="fff">
                  <div class="thumbnail">
                    <a href="#">
                      <?php if(isset($all_meta_for_user['custom_user_profile_pic'][0]) && $all_meta_for_user['custom_user_profile_pic'][0]!=""){?>     
                        <img style="height: 200px; width: 100%;" src="<?php echo get_site_url().'/wp-content/uploads/profile_pic/'.$all_meta_for_user['custom_user_profile_pic'][0];?>" alt="">
                      <?php }else{ ?>            
                          <img style="height: 200px; width: 100%;" src="<?php echo get_template_directory_uri(); ?>/images/avatar_2x.png" alt="">          
                      <?php } ?>                      
                    </a>
                  </div>
                  <div class="caption">
                    <h4><?php echo $all_meta_for_user['custom_user_name'][0];?></h4>
                    <!-- <p>Nullam Condimentum Nibh Etiam Sem</p> -->
                    <p class="text-right">
                      <a class="btn btn-primary btn-xs " href="<?php echo site_url('/user-profile/').'?id='.$user_id;?>">» Detail</a>
                    </p>
                  </div>
                </div>
              </li>

          <?php
          //last loop
          if($x==$cnt){
          ?>
            </ul>
          </div><!-- /Slide1 --> 
          <?php
          }elseif ($x%4==0) {
          ?>
            </ul>
          </div><!-- /Slide1 --> 
          <!-- start new slider -->
          <div class="item item-b">
            <ul class="thumbnails">          
          <?php
          }
          $x++;
        }
        }
      }
          ?>
        </div>
        <nav>
          <ul class="control-box pager">
            <li class="slider-arrow" target-class="item-b" id="minus"><a><i class="fa fa-angle-double-left"></i></a></li>
            <li class="slider-arrow" target-class="item-b" id="plus"><a><i class="fa fa-angle-double-right"></i></a></li>
          </ul>
        </nav>
        </div><!-- /#myCarousel -->
      </div><!-- /.col-xs-12 -->    
      <p class="text-center">
        <a class="btn btn-primary btn-xs " href="<?php echo site_url('/list-view/').'?type=Life Time Member';?>">View All</a>
      </p>        
    </div>      <!-- row -->

    <!-- Life Time Member -->

  <div class="row">
    <div class="col-md-12">
      <h2 class="colored-title center-text"><a href="<?php echo site_url('/list-view/').'?type=Member';?>">Member</a></h2>
     <hr>
    </div>   
     
    <div class="col-xs-12">
      <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
          <?php 
            global $wpdb;
            $table_name = $wpdb->prefix . 'usermeta';
            $members = $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE meta_value = 'Member' AND meta_key='custom_user_account_type'", OBJECT );
            $cnt = count($members);
            if ($cnt!=0) {
          ?>

          <div class="item item-c active">
            <ul class="thumbnails">  
            <?php     
            $x=1;
            $cnt = count($members);
            $finish_required = true;         
            foreach ($members as $member) {
              $user_id = $member->user_id;
              if(get_user_meta($user_id, 'custom_is_active', true) == 1){
              $all_meta_for_user = get_user_meta( $user_id );
              $user_info = get_userdata( $user_id );
            ?>

              <li class="col-sm-3">
                <div class="fff">
                  <div class="thumbnail">
                    <a href="#">
                      <?php if(isset($all_meta_for_user['custom_user_profile_pic'][0]) && $all_meta_for_user['custom_user_profile_pic'][0]!=""){?>     
                        <img style="height: 200px; width: 100%;" src="<?php echo get_site_url().'/wp-content/uploads/profile_pic/'.$all_meta_for_user['custom_user_profile_pic'][0];?>" alt="">
                      <?php }else{ ?>            
                          <img style="height: 200px; width: 100%;" src="<?php echo get_template_directory_uri(); ?>/images/avatar_2x.png" alt="">          
                      <?php } ?>                      
                    </a>
                  </div>
                  <div class="caption">
                    <h4><?php echo $all_meta_for_user['custom_user_name'][0];?></h4>
                    <!-- <p>Nullam Condimentum Nibh Etiam Sem</p> -->
                    <p class="text-right">
                      <a class="btn btn-primary btn-xs " href="<?php echo site_url('/user-profile/').'?id='.$user_id;?>">» Detail</a>
                    </p>
                  </div>
                </div>
              </li>

          <?php
          //last loop
          if($x==$cnt){
          ?>
            </ul>
          </div><!-- /Slide1 --> 
          <?php
          }elseif ($x%4==0) {
          ?>
            </ul>
          </div><!-- /Slide1 --> 
          <!-- start new slider -->
          <div class="item item-c">
            <ul class="thumbnails">          
          <?php
          }
          $x++;
        }
        }
      }
          ?>
        </div>
        <nav>
          <ul class="control-box pager">
            <li class="slider-arrow" target-class="item-c" id="minus"><a><i class="fa fa-angle-double-left"></i></a></li>
            <li class="slider-arrow" target-class="item-c" id="plus"><a><i class="fa fa-angle-double-right"></i></a></li>
          </ul>
        </nav>
        </div><!-- /#myCarousel -->
      </div><!-- /.col-xs-12 -->   
      <p class="text-center">
        <a class="btn btn-primary btn-xs " href="<?php echo site_url('/list-view/').'?type=Member';?>">View All</a>
      </p>        
    </div>      <!-- row -->

    <!-- Member -->

  <div class="row">
    <div class="col-md-12">
      <h2 class="colored-title center-text"><a  href="<?php echo site_url('/list-view/').'?type=Associate Member';?>">Associate Member</a></h2>
      <hr> 
    </div>  
     
    <div class="col-xs-12">
      <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
          <?php 
            global $wpdb;
            $table_name = $wpdb->prefix . 'usermeta';
            $members = $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE meta_value = 'Associate Member' AND meta_key='custom_user_account_type'", OBJECT );
            $cnt = count($members);
            if ($cnt!=0) {
          ?>

          <div class="item item-d active">
            <ul class="thumbnails">  
            <?php     
            $x=1;
            $cnt = count($members);
            $finish_required = true;         
            foreach ($members as $member) {
              $user_id = $member->user_id;
              if(get_user_meta($user_id, 'custom_is_active', true) == 1){
              $all_meta_for_user = get_user_meta( $user_id );
              $user_info = get_userdata( $user_id );
            ?>

              <li class="col-sm-3">
                <div class="fff">
                  <div class="thumbnail">
                    <a href="#">
                      <?php if(isset($all_meta_for_user['custom_user_profile_pic'][0]) && $all_meta_for_user['custom_user_profile_pic'][0]!=""){?>     
                        <img style="height: 200px; width: 100%;" src="<?php echo get_site_url().'/wp-content/uploads/profile_pic/'.$all_meta_for_user['custom_user_profile_pic'][0];?>" alt="">
                      <?php }else{ ?>            
                          <img style="height: 200px; width: 100%;" src="<?php echo get_template_directory_uri(); ?>/images/avatar_2x.png" alt="">          
                      <?php } ?>                      
                    </a>
                  </div>
                  <div class="caption">
                    <h4><?php echo $all_meta_for_user['custom_user_name'][0];?></h4>
                    <!-- <p>Nullam Condimentum Nibh Etiam Sem</p> -->
                    <p class="text-right">
                      <a class="btn btn-primary btn-xs " href="<?php echo site_url('/user-profile/').'?id='.$user_id;?>">» Detail</a>
                    </p>
                  </div>
                </div>
              </li>

          <?php
          //last loop
          if($x==$cnt){
          ?>
            </ul>
          </div><!-- /Slide1 --> 
          <?php
          }elseif ($x%4==0) {
          ?>
            </ul>
          </div><!-- /Slide1 --> 
          <!-- start new slider -->
          <div class="item item-d">
            <ul class="thumbnails">          
          <?php
          }
          $x++;
        }
        }
      }
          ?>
        </div>
        <nav>
          <ul class="control-box pager">
            <li class="slider-arrow" target-class="item-d" id="minus"><a><i class="fa fa-angle-double-left"></i></a></li>
            <li class="slider-arrow" target-class="item-d" id="plus"><a><i class="fa fa-angle-double-right"></i></a></li>
          </ul>
        </nav>
        </div><!-- /#myCarousel -->
      </div><!-- /.col-xs-12 -->
      <p class="text-center">
        <a class="btn btn-primary btn-xs " href="<?php echo site_url('/list-view/').'?type=Associate Member';?>">View All</a>
      </p>              
    </div>      <!-- row -->

    <!-- Associate Member -->

  <div class="row">
    <div class="col-md-12">
      <h2 class="colored-title center-text"><a href="<?php echo site_url('/list-view/').'?type=Primary Member';?>">Primary Member</a></h2>
      <hr> 
    </div>   
    
    <div class="col-xs-12">
      <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
          <?php 
            global $wpdb;
            $table_name = $wpdb->prefix . 'usermeta';
            $members = $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE meta_value = 'Primary Member' AND meta_key='custom_user_account_type'", OBJECT );
            $cnt = count($members);
            if ($cnt!=0) {
          ?>

          <div class="item item-e active">
            <ul class="thumbnails">  
            <?php     
            $x=1;
            $finish_required = true;         
            foreach ($members as $member) {
              $user_id = $member->user_id;
              if(get_user_meta($user_id, 'custom_is_active', true) == 1){
              $all_meta_for_user = get_user_meta( $user_id );
              $user_info = get_userdata( $user_id );
            ?>

              <li class="col-sm-3">
                <div class="fff">
                  <div class="thumbnail">
                    <a href="#">
                      <?php if(isset($all_meta_for_user['custom_user_profile_pic'][0]) && $all_meta_for_user['custom_user_profile_pic'][0]!=""){?>     
                        <img style="height: 200px; width: 100%;" src="<?php echo get_site_url().'/wp-content/uploads/profile_pic/'.$all_meta_for_user['custom_user_profile_pic'][0];?>" alt="">
                      <?php }else{ ?>            
                          <img style="height: 200px; width: 100%;" src="<?php echo get_template_directory_uri(); ?>/images/avatar_2x.png" alt="">          
                      <?php } ?>                      
                    </a>
                  </div>
                  <div class="caption">
                    <h4><?php echo $all_meta_for_user['custom_user_name'][0];?></h4>
                    <!-- <p>Nullam Condimentum Nibh Etiam Sem</p> -->
                    <p class="text-right">
                      <a class="btn btn-primary btn-xs " href="<?php echo site_url('/user-profile/').'?id='.$user_id;?>">» Detail</a>
                    </p>
                  </div>
                </div>
              </li>

          <?php
          //last loop
          if($x==$cnt){
          ?>
            </ul>
          </div><!-- /Slide1 --> 
          <?php
          }elseif ($x%4==0) {
          ?>
            </ul>
          </div><!-- /Slide1 --> 
          <!-- start new slider -->
          <div class="item item-e">
            <ul class="thumbnails">          
          <?php
          }
          $x++;
        }
        }
      }
          ?>
        </div>
        <nav>
          <ul class="control-box pager">
            <li class="slider-arrow" target-class="item-e" id="minus"><a><i class="fa fa-angle-double-left"></i></a></li>
            <li class="slider-arrow" target-class="item-e" id="plus"><a><i class="fa fa-angle-double-right"></i></a></li>
          </ul>
        </nav>
        </div><!-- /#myCarousel -->
      </div><!-- /.col-xs-12 --> 
      <p class="text-center">
        <a class="btn btn-primary btn-xs " href="<?php echo site_url('/list-view/').'?type=Primary Member';?>">View All</a>
      </p>           
    </div>      <!-- row -->

  </div><!-- /.container -->

    <script type="text/javascript">
    // Carousel Auto-Cycle
    jQuery(document).ready(function() {
/*      jQuery('.carousel').carousel({
        interval: 6000
      });*/

      // item-a

      
      jQuery('.slider-arrow').click(function(){
        var target_class = jQuery(this).attr('target-class');
        var type_a_total = jQuery('.'+target_class).length;
        var current_item;
        var cnt = 1;
        jQuery('.'+target_class).each(function(){
          if(jQuery(this).hasClass('active')){
            current_item = cnt;
          }
          cnt++;
        });


        if(jQuery(this).attr('id')=='minus'){
          current_item = current_item-1;
        }else{
          current_item = current_item+1;
        }

        if((current_item == 0) || (current_item>type_a_total)){
          current_item = 1;
        }

        cnt = 1;
        jQuery('.'+target_class).removeClass('active');
        jQuery('.'+target_class).each(function(){
          if(current_item == cnt){
            jQuery(this).addClass('active');
          }
          cnt++;
        });


      });

    });
  </script>

  <?php get_footer();?> 

