<?php 
/*
Template Name: Career
*/
get_header();?> 
<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>


    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background-color: #12477B; color: white;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
<!--             <h2>Career</h2>
            <p>We Are Hiring</p> -->
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li>Career</li>
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

            <div class="col-md-7">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>Opportunities:</span></h4>

              <!-- Some Text -->
              <?php the_content(); ?>    

            </div>

            <div class="col-md-5">
              <?php 
              $custom2 = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'secondary-image', get_the_ID()); 
              $custom2 =wp_get_attachment_image_src($custom2,'secondary-image'); 
              ?>   
              <!-- Start Touch Slider -->
              <div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
                <div class="item"><img alt="" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' );?>"></div>
                <div class="item"><img alt="" src="<?php echo $custom2[0]; ?>"></div>
              </div>
              <!-- End Touch Slider -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End content -->



  <?php endwhile; ?>
  <?php else : ?>
    <h3><?php _e('404 Error&#58; Not Found'); ?></h3>
  <?php endif; ?>

<?php get_footer();?> 