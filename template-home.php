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
          <div class="row" id="slider-home-id">
            <div class="col-md-12">
              <?php echo do_shortcode('[metaslider id="23"]'); ?>           
            </div>
          </div> <!-- slider row -->
        </div>
        <div class="col-md-3">
          <!-- News -->
          <div class="row">
            <div class="col-md-12">
              <div class="side-bar-section">
                <div class="title-side-bar" id="news-feed-title">
                  <a href="<?php echo site_url('/news/');?>" style="color: white;">News Feed</a>
                </div>
                <div id="news-feed" style="overflow-y: scroll;">             
                  <?php 
                      query_posts(array( 
                          'post_type' => 'News',
                          'showposts' => 10,
                          'order'     => 'DESC' 
                      ) );  
                  ?>           
                  <?php while (have_posts()) : the_post(); ?> 
                  <span class="single-sidebar-news">
                    <a href="<?php echo get_permalink();?>">
                      <h5 style="color: #12477B;"><?php echo get_the_title();?></h5>
                      <p style="font-size: 75%; font-weight: bold;"><i>Published at:</i> <?php echo get_the_date();?></p>
                    </a>
                  </span>
                  <?php endwhile;?>
                </div>   
                
              </div>
            </div>
          </div> <!-- News row ends -->
        </div>
      </div>

      <div class="row" style="padding-bottom: 20px">
        <br>
        <br>
        <div class="col-md-9">
          <h2 class="colored-title center-text">
            <a href="<?php echo site_url('/events/');?>" style="color: #12477B;">Recent Events</a>
          </h2>          
        </div>
        <div class="col-md-3">
        </div>
        <br>
      </div>




      <div class="row">
        <div class="col-md-9" id="second-row-left">
          <!-- Slider -->
          <div class="row">
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
                    <img style="height: 200px; width: 100%;"  src="<?php echo get_the_post_thumbnail_url();?>" alt="Lights" style="width:100%">
                    <div class="caption">
                      <p><?php echo get_the_title();?></p>
                    </div>
                  </a>
                </div>
              </div>
            <?php endwhile;?>
          </div> <!-- slider row -->

          <!-- YOutube links -->
          <div class="row">
            <div class="col-md-12">
              <h2 class="colored-title center-text">Youtube Links</h2>
            </div>
            <div class="col-md-12">
              <?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>
            </div>
          </div> <!-- youtube row ends -->          
        </div>
        <div class="col-md-3">
          <div class="row">
            <div class="col-md-12">
              <div class="side-bar-section">
                <div class="title-side-bar">
                  <a href="<?php echo site_url('/notice/');?>" style="color: white;">Notice Board</a>
                </div>
                <div id="notice-feed" style="overflow-y: scroll;">
                  <?php 
                      query_posts(array( 
                          'post_type' => 'Notice',
                          'showposts' => 10,
                          'order'     => 'DESC' 
                      ) );  
                  ?>           
                  <?php while (have_posts()) : the_post(); ?> 
                  <span class="single-sidebar-news">
                    <a href="<?php echo get_permalink();?>">
                      <h5 style="color: #12477B;"><?php echo get_the_title();?></h5>
                      <p style="font-size: 75%; font-weight: bold;"><i>Published at:</i> <?php echo get_the_date();?></p>
                    </a>
                  </span>
                  <?php endwhile;?>
                </div>
              </div>
            </div>
          </div> <!-- Event row ends -->
        </div>
      </div>
      <br><br><br>
    </div> <!-- end of container -->

<script type="text/javascript">
  jQuery(document).ready(function(){
    // alert(); px
    if(jQuery( window ).width() >= 992){
      var height_news_feed = parseInt(jQuery('#slider-home-id').height()) - parseInt(jQuery('#news-feed-title').height())- 22;
      jQuery('#news-feed').css('height', height_news_feed+'px');
      
      var height_notice_feed = parseInt(jQuery('#second-row-left').height()) - 45;
      jQuery('#notice-feed').css('height', height_notice_feed+'px');
      

    }
  });
</script>    
<?php get_footer();?> 

