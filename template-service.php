<?php 
/*
Template Name: Service
*/
get_header();?>
<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
<!-- Start Page Banner -->
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
<!--             <h2>Services</h2>
            <p>We Are Professional</p> -->
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li>Services</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">


          <div class="row">
              <?php 
              $custom2 = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'secondary-image', get_the_ID()); 
              $custom2 =wp_get_attachment_image_src($custom2,'secondary-image'); 
               
              $custom3 = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'third-image', get_the_ID()); 
              $custom3 =wp_get_attachment_image_src($custom3,'third-image'); 
              ?> 
            <!-- Start Image Service Box 1 -->
            <div class="col-md-4 image-service-box">
              <img class="img-thumbnail" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' );?>" alt="" />
              <h4><?php echo get_post_meta(get_the_ID(), "Column 1 title", true);?></h4>
              <p><?php echo get_post_meta(get_the_ID(), "Column 1 description", true);?></p>
            </div>
            <!-- End Image Service Box 1 -->

            <!-- Start Image Service Box 2 -->
            <div class="col-md-4 image-service-box">
              <img class="img-thumbnail" src="<?php echo $custom2[0]; ?>" alt="" />
              <h4><?php echo get_post_meta(get_the_ID(), "Column 2 title", true);?></h4>
              <p><?php echo get_post_meta(get_the_ID(), "Column 2 description", true);?></p>
            </div>
            <!-- End Image Service Box 2 -->

            <!-- Start Image Service Box 3 -->
            <div class="col-md-4 image-service-box">
              <img class="img-thumbnail" src="<?php echo $custom3[0]; ?>" alt="" />
              <h4><?php echo get_post_meta(get_the_ID(), "Column 3 title", true);?></h4>
              <p><?php echo get_post_meta(get_the_ID(), "Column 3 description", true);?></p>
            </div>
            <!-- End Image Service Box 3 -->

          </div>

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:45px;"></div>

          <div class="row">

            <div class="col-md-6">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>We Are Awesome</span></h4>

              <!-- Accordion -->
              <div class="panel-group" id="accordion">

                <!-- Start Accordion 1 -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-one">
                        <i class="fa fa-angle-up control-icon"></i>
                        <i class="fa fa-check"></i> <?php echo get_post_meta(get_the_ID(), "Para 2 title 1", true);?>
                      </a>
                    </h4>
                  </div>
                  <div id="collapse-one" class="panel-collapse collapse in">
                    <div class="panel-body"><?php echo get_post_meta(get_the_ID(), "Para 2 description 1", true);?></div>
                  </div>
                </div>
                <!-- End Accordion 1 -->

                <!-- Start Accordion 2 -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-tow" class="collapsed">
                        <i class="fa fa-angle-up control-icon"></i>
                        <i class="fa  fa-check"></i> <?php echo get_post_meta(get_the_ID(), "Para 2 title 2", true);?>
                      </a>
                    </h4>
                  </div>
                  <div id="collapse-tow" class="panel-collapse collapse">
                    <div class="panel-body"><?php echo get_post_meta(get_the_ID(), "Para 2 description 2", true);?></div>
                  </div>
                </div>
                <!-- End Accordion 2 -->

                <!-- Start Accordion 3 -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-three" class="collapsed">
                        <i class="fa fa-angle-up control-icon"></i>
                        <i class="fa fa-check"></i> <?php echo get_post_meta(get_the_ID(), "Para 2 title 3", true);?>
                      </a>
                    </h4>
                  </div>
                  <div id="collapse-three" class="panel-collapse collapse">
                    <div class="panel-body"><?php echo get_post_meta(get_the_ID(), "Para 2 description 3", true);?></div>
                  </div>
                </div>
                <!-- End Accordion 3 -->

              </div>
              <!-- End Accordion -->

            </div>

            <div class="col-md-6">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>Our Features</span></h4>

              <div class="row">


                <div class="col-md-12 service-box service-icon-left-more">
                  <div class="service-icon">
                    <i class="fa fa-users icon-medium"></i>
                  </div>
                  <div class="service-content">
                    <h4><?php echo get_post_meta(get_the_ID(), "Feature 1 title", true);?></h4>
                    <p><?php echo get_post_meta(get_the_ID(), "Feature 1 description", true);?></p>
                  </div>
                </div>

                <div class="col-md-12 service-box service-icon-left-more">
                  <div class="service-icon">
                    <i class="fa fa-umbrella icon-medium"></i>
                  </div>
                  <div class="service-content">
                    <h4><?php echo get_post_meta(get_the_ID(), "Feature 2 title", true);?></h4>
                    <p><?php echo get_post_meta(get_the_ID(), "Feature 2 description", true);?></p>
                  </div>
                </div>

                <div class="col-md-12 service-box service-icon-left-more">
                  <div class="service-icon">
                    <i class="fa fa-leaf icon-medium"></i>
                  </div>
                  <div class="service-content">
                    <h4><?php echo get_post_meta(get_the_ID(), "Feature 3 title", true);?></h4>
                    <p><?php echo get_post_meta(get_the_ID(), "Feature 3 description", true);?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Content -->


  <?php endwhile; ?>
  <?php else : ?>
    <h3><?php _e('404 Error&#58; Not Found'); ?></h3>
  <?php endif; ?>

<?php get_footer();?> 