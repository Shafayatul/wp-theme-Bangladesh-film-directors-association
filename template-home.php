<?php 
/*
Template Name: Home
*/
get_header();?> 
<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>    
<?php endwhile; ?>
<?php else : ?>
  <h3><?php _e('404 Error&#58; Not Found'); ?></h3>
<?php endif; ?>
    <!-- Start Home Page Slider -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
          <br>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-9">
          <!-- Slider -->
          <div class="row">
            <div class="col-md-12">
              <?php echo do_shortcode('[metaslider id="23"]'); ?>           
            </div>
          </div> <!-- slider row -->

          <br>
          <!-- YOutube links -->
          <div class="row">
            <div class="col-md-12">
              <h2 class="colored-title center-text">Youtube Links</h2>
            </div>
            <div class="col-md-12">
              <?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>
            </div>
          </div> <!-- youtube row ends -->


          <br>
          <!-- Event links -->
          <div class="row">
            <div class="col-md-12">
              <h2 class="colored-title center-text">Recent Events</h2>
              <br>
            </div>


            <?php 
                query_posts(array( 
                    'post_type' => 'Events',
                    'showposts' => 3,
                    'order'     => 'DESC' 
                ) );  
            ?>           
            <?php while (have_posts()) : the_post(); ?> 
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="<?php echo get_permalink();?>">
                    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Lights" style="width:100%">
                    <div class="caption">
                      <p><?php echo get_the_title();?></p>
                    </div>
                  </a>
                </div>
              </div>
            <?php endwhile;?>


          </div> <!-- Event row ends -->


        </div>
        <div class="col-md-3">
          <!-- News -->
          <div class="row">
            <div class="col-md-12">
              <div class="side-bar-section">
                <div class="title-side-bar">
                  News Feed
                </div>
                <?php 
                    query_posts(array( 
                        'post_type' => 'News',
                        'showposts' => 10,
                        'order'     => 'DESC' 
                    ) );  
                ?>           
                <?php while (have_posts()) : the_post(); ?> 
                <span class="single-sidebar-news"><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></span>
                <?php endwhile;?>
                
              </div>
            </div>
          </div> <!-- News row ends -->

          <br>
          <br>
          <br>

          <!-- Events -->
          <div class="row">
            <div class="col-md-12">
              <div class="side-bar-section">
                <div class="title-side-bar">
                  Notice Board
                </div>
                <?php 
                    query_posts(array( 
                        'post_type' => 'Notice',
                        'showposts' => 10,
                        'order'     => 'DESC' 
                    ) );  
                ?>           
                <?php while (have_posts()) : the_post(); ?> 
                <span class="single-sidebar-news"><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></span>
                <?php endwhile;?>
                
              </div>
            </div>
          </div> <!-- Event row ends -->


        </div>
      </div>
    </div>
<?php get_footer();?> 

