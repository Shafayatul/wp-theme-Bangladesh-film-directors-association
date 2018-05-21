<?php 
/*
Template Name: Director Guilds
*/
get_header();


?>   
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style2.css" media="screen" type="text/css" >


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="colored-title center-text">Executive Member</h2>
    </div>    
    <div class="col-xs-12">
      <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
          <?php 
            global $wpdb;
            $table_name = $wpdb->prefix . 'usermeta';
            $members = $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE meta_value = 'Executive Member' AND meta_key='custom_user_account_type'", OBJECT );
          ?>

          <div class="item active">
            <ul class="thumbnails">  
            <?php     
            $x=1;
            $cnt = count($members);
            $finish_required = true;         
            foreach ($members as $member) {
              $user_id = $member->user_id;
              $all_meta_for_user = get_user_meta( $user_id );
              $user_info = get_userdata( $user_id );
            ?>

              <li class="col-sm-3">
                <div class="fff">
                  <div class="thumbnail">
                    <a href="#"><img src="<?php echo get_site_url().'/wp-content/uploads/profile_pic/'.$all_meta_for_user['custom_user_profile_pic'][0];?>" alt=""></a>
                  </div>
                  <div class="caption">
                    <h4><?php echo $all_meta_for_user['custom_user_name'][0];?></h4>
                    <!-- <p>Nullam Condimentum Nibh Etiam Sem</p> -->
                    <a class="btn btn-mini" href="<?php echo site_url('/user-profile/').'?id='.$user_id;?>">» Read More</a>
                  </div>
                </div>
              </li>

            <?php
              if($x%4==0){

            ?>
              </ul>
            </div><!-- /Slide1 --> 
            <?php if($x!=$cnt){ ?>
              <!-- start new slider -->
              <div class="item">
                <ul class="thumbnails">
            <?php                  
              }
              }elseif($x==$cnt){
            ?>
              </ul>
            </div><!-- /Slide1 --> 
            <?php
              }
              $x++;
            }
          ?>
        </div>
        <nav>
          <ul class="control-box pager">
            <li><a data-slide="prev" href="#myCarousel" class=""><i class="fa fa-angle-double-left"></i></a></li>
            <li><a data-slide="next" href="#myCarousel" class=""><i class="fa fa-angle-double-right"></i></li>
            </ul>
          </nav>
        </div><!-- /#myCarousel -->
      </div><!-- /.col-xs-12 -->    
    </div>      <!-- row -->


    <!-- End of Executive Member -->


  <div class="row">
    <div class="col-md-12">
      <h2 class="colored-title center-text">Life Time Member</h2>
    </div>    
    <div class="col-xs-12">
      <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
          <?php 
            global $wpdb;
            $table_name = $wpdb->prefix . 'usermeta';
            $members = $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE meta_value = 'Life Time Member' AND meta_key='custom_user_account_type'", OBJECT );
          ?>

          <div class="item active">
            <ul class="thumbnails">  
            <?php     
            $x=1;
            $cnt = count($members);
            $finish_required = true;         
            foreach ($members as $member) {
              $user_id = $member->user_id;
              $all_meta_for_user = get_user_meta( $user_id );
              $user_info = get_userdata( $user_id );
            ?>

              <li class="col-sm-3">
                <div class="fff">
                  <div class="thumbnail">
                    <a href="#"><img src="<?php echo get_site_url().'/wp-content/uploads/profile_pic/'.$all_meta_for_user['custom_user_profile_pic'][0];?>" alt=""></a>
                  </div>
                  <div class="caption">
                    <h4><?php echo $all_meta_for_user['custom_user_name'][0];?></h4>
                    <!-- <p>Nullam Condimentum Nibh Etiam Sem</p> -->
                    <a class="btn btn-mini" href="<?php echo site_url('/user-profile/').'?id='.$user_id;?>">» Read More</a>
                  </div>
                </div>
              </li>

            <?php
              if($x%4==0){

            ?>
              </ul>
            </div><!-- /Slide1 --> 
            <?php if($x!=$cnt){ ?>
              <!-- start new slider -->
              <div class="item">
                <ul class="thumbnails">
            <?php                  
              }
              }elseif($x==$cnt){
            ?>
              </ul>
            </div><!-- /Slide1 --> 
            <?php
              }
              $x++;
            }
          ?>
        </div>
        <nav>
          <ul class="control-box pager">
            <li><a data-slide="prev" href="#myCarousel" class=""><i class="fa fa-angle-double-left"></i></a></li>
            <li><a data-slide="next" href="#myCarousel" class=""><i class="fa fa-angle-double-right"></i></li>
            </ul>
          </nav>
        </div><!-- /#myCarousel -->
      </div><!-- /.col-xs-12 -->    
    </div>      <!-- row -->

    <!-- Life Time Member -->

  <div class="row">
    <div class="col-md-12">
      <h2 class="colored-title center-text">Member</h2>
    </div>    
    <div class="col-xs-12">
      <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
          <?php 
            global $wpdb;
            $table_name = $wpdb->prefix . 'usermeta';
            $members = $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE meta_value = 'Member' AND meta_key='custom_user_account_type'", OBJECT );
          ?>

          <div class="item active">
            <ul class="thumbnails">  
            <?php     
            $x=1;
            $cnt = count($members);
            $finish_required = true;         
            foreach ($members as $member) {
              $user_id = $member->user_id;
              $all_meta_for_user = get_user_meta( $user_id );
              $user_info = get_userdata( $user_id );
            ?>

              <li class="col-sm-3">
                <div class="fff">
                  <div class="thumbnail">
                    <a href="#"><img src="<?php echo get_site_url().'/wp-content/uploads/profile_pic/'.$all_meta_for_user['custom_user_profile_pic'][0];?>" alt=""></a>
                  </div>
                  <div class="caption">
                    <h4><?php echo $all_meta_for_user['custom_user_name'][0];?></h4>
                    <!-- <p>Nullam Condimentum Nibh Etiam Sem</p> -->
                    <a class="btn btn-mini" href="<?php echo site_url('/user-profile/').'?id='.$user_id;?>">» Read More</a>
                  </div>
                </div>
              </li>

            <?php
              if($x%4==0){

            ?>
              </ul>
            </div><!-- /Slide1 --> 
            <?php if($x!=$cnt){ ?>
              <!-- start new slider -->
              <div class="item">
                <ul class="thumbnails">
            <?php                  
              }
              }elseif($x==$cnt){
            ?>
              </ul>
            </div><!-- /Slide1 --> 
            <?php
              }
              $x++;
            }
          ?>
        </div>
        <nav>
          <ul class="control-box pager">
            <li><a data-slide="prev" href="#myCarousel" class=""><i class="fa fa-angle-double-left"></i></a></li>
            <li><a data-slide="next" href="#myCarousel" class=""><i class="fa fa-angle-double-right"></i></li>
            </ul>
          </nav>
        </div><!-- /#myCarousel -->
      </div><!-- /.col-xs-12 -->    
    </div>      <!-- row -->

    <!-- Member -->

  <div class="row">
    <div class="col-md-12">
      <h2 class="colored-title center-text">Associate Member</h2>
    </div>    
    <div class="col-xs-12">
      <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
          <?php 
            global $wpdb;
            $table_name = $wpdb->prefix . 'usermeta';
            $members = $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE meta_value = 'Associate Member' AND meta_key='custom_user_account_type'", OBJECT );
          ?>

          <div class="item active">
            <ul class="thumbnails">  
            <?php     
            $x=1;
            $cnt = count($members);
            $finish_required = true;         
            foreach ($members as $member) {
              $user_id = $member->user_id;
              $all_meta_for_user = get_user_meta( $user_id );
              $user_info = get_userdata( $user_id );
            ?>

              <li class="col-sm-3">
                <div class="fff">
                  <div class="thumbnail">
                    <a href="#"><img src="<?php echo get_site_url().'/wp-content/uploads/profile_pic/'.$all_meta_for_user['custom_user_profile_pic'][0];?>" alt=""></a>
                  </div>
                  <div class="caption">
                    <h4><?php echo $all_meta_for_user['custom_user_name'][0];?></h4>
                    <!-- <p>Nullam Condimentum Nibh Etiam Sem</p> -->
                    <a class="btn btn-mini" href="<?php echo site_url('/user-profile/').'?id='.$user_id;?>">» Read More</a>
                  </div>
                </div>
              </li>

            <?php
              if($x%4==0){

            ?>
              </ul>
            </div><!-- /Slide1 --> 
            <?php if($x!=$cnt){ ?>
              <!-- start new slider -->
              <div class="item">
                <ul class="thumbnails">
            <?php                  
              }
              }elseif($x==$cnt){
            ?>
              </ul>
            </div><!-- /Slide1 --> 
            <?php
              }
              $x++;
            }
          ?>
        </div>
        <nav>
          <ul class="control-box pager">
            <li><a data-slide="prev" href="#myCarousel" class=""><i class="fa fa-angle-double-left"></i></a></li>
            <li><a data-slide="next" href="#myCarousel" class=""><i class="fa fa-angle-double-right"></i></li>
            </ul>
          </nav>
        </div><!-- /#myCarousel -->
      </div><!-- /.col-xs-12 -->    
    </div>      <!-- row -->

    <!-- Associate Member -->

  <div class="row">
    <div class="col-md-12">
      <h2 class="colored-title center-text">Primary Member</h2>
    </div>    
    <div class="col-xs-12">
      <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
          <?php 
            global $wpdb;
            $table_name = $wpdb->prefix . 'usermeta';
            $members = $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE meta_value = 'Primary Member' AND meta_key='custom_user_account_type'", OBJECT );
          ?>

          <div class="item active">
            <ul class="thumbnails">  
            <?php     
            $x=1;
            $cnt = count($members);
            $finish_required = true;         
            foreach ($members as $member) {
              $user_id = $member->user_id;
              $all_meta_for_user = get_user_meta( $user_id );
              $user_info = get_userdata( $user_id );
            ?>

              <li class="col-sm-3">
                <div class="fff">
                  <div class="thumbnail">
                    <a href="#"><img src="<?php echo get_site_url().'/wp-content/uploads/profile_pic/'.$all_meta_for_user['custom_user_profile_pic'][0];?>" alt=""></a>
                  </div>
                  <div class="caption">
                    <h4><?php echo $all_meta_for_user['custom_user_name'][0];?></h4>
                    <!-- <p>Nullam Condimentum Nibh Etiam Sem</p> -->
                    <a class="btn btn-mini" href="<?php echo site_url('/user-profile/').'?id='.$user_id;?>">» Read More</a>
                  </div>
                </div>
              </li>

            <?php
              if($x%4==0){

            ?>
              </ul>
            </div><!-- /Slide1 --> 
            <?php if($x!=$cnt){ ?>
              <!-- start new slider -->
              <div class="item">
                <ul class="thumbnails">
            <?php                  
              }
              }elseif($x==$cnt){
            ?>
              </ul>
            </div><!-- /Slide1 --> 
            <?php
              }
              $x++;
            }
          ?>
        </div>
        <nav>
          <ul class="control-box pager">
            <li><a data-slide="prev" href="#myCarousel" class=""><i class="fa fa-angle-double-left"></i></a></li>
            <li><a data-slide="next" href="#myCarousel" class=""><i class="fa fa-angle-double-right"></i></li>
            </ul>
          </nav>
        </div><!-- /#myCarousel -->
      </div><!-- /.col-xs-12 -->    
    </div>      <!-- row -->

    <!-- Primary Member -->

  </div><!-- /.container -->

    <script type="text/javascript">
    // Carousel Auto-Cycle
    jQuery(document).ready(function() {
      jQuery('.carousel').carousel({
        interval: 6000
      })
    });
  </script>
  <?php get_footer();?> 

