<?php get_header();?> 
  <?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>

    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background-color: #12477B; color: white;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><?php the_title();?></li>
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

            <div class="col-md-12">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span><?php the_title();?></span></h4>
              <p style="font-size: 75%; font-weight: bold;"><i>Published at:</i> <?php echo get_the_date();?></p>
              <!-- Some Text -->
              <?php the_content(); ?>
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