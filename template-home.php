<?php 
/*
Template Name: Home
*/
get_header();?> 
<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); 
$title1 = get_post_meta(get_the_ID(), "Title 1", true);
$des1 = get_post_meta(get_the_ID(), "Description 1", true);
$title2 = get_post_meta(get_the_ID(), "Title 2", true);
$des2 = get_post_meta(get_the_ID(), "Description 2", true);
$title3 = get_post_meta(get_the_ID(), "Title 3", true);
$des3 = get_post_meta(get_the_ID(), "Description 3", true);
$title4 = get_post_meta(get_the_ID(), "Title 4", true);
$des4 = get_post_meta(get_the_ID(), "Description 4", true);
?>    
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


    

<!--     <div class="section full-width-portfolio" style="padding-bottom: 0px;border-top:0; border-bottom:0; background:#fff;">

      <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
        <h1>Our <strong>Product</strong></h1>
      </div>

        <div class="container product_div">
          <div class="portfolio_wrap">
            <div class="portfolio-box iso-call col-4-space grid cs-style-3" style="position: relative;">
              <?php 
                  query_posts(array( 
                      'post_type' => 'Products',
                      'showposts' => 100,
                      'order'     => 'ASC' 
                  ) );  
              ?>           
              <?php while (have_posts()) : the_post(); ?>   
              <div class="project-post " style="position: absolute;">
                <figure>
                  <img alt="" src="<?php echo get_the_post_thumbnail_url();?>">
                  <figcaption>
                    <strong>
                      <a href="<?php echo get_permalink();?>"><?php echo get_the_title();?>
                      </a>
                    </strong>
                  </figcaption>
                </figure>
              </div>
              <?php endwhile;?>
            </div>
          </div>
        </div>  
    </div> -->
<?php get_footer();?> 

