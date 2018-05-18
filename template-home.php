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
    <section id="home">


      <div class="skdslider">

        <ul id="demo1" class="slides">

          <?php 
              query_posts(array( 
                  'post_type' => 'Slider',
                  'showposts' => 100,
                  'order'     => 'ASC' 
              ) );  
          ?>
          <?php while (have_posts()) : the_post(); ?>
          <li>
            <img src="<?php echo get_the_post_thumbnail_url();?>" />
            <div class="slide-desc">
              <h2><?php echo get_the_title();?></h2>
              <p><?php echo get_the_content(); ?></p>
            </div>
          </li>
          <?php endwhile;?>
          
        </ul>
      </div>
    </section>
    <!-- End Home Page Slider -->

    <!-- Start Services Section -->
    <div class="section service" style="padding-bottom: 0px;">
      <div class="container">
        <div class="row">

          <div class="col-md-3 col-sm-12 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
            <div class="service-icon">
              <i class="fa fa-rocket icon-large"></i>
            </div>
            <div class="service-content">
              <h4><?php echo $title1;?></h4>
              <p><?php echo $des1;?></p>
            </div>
          </div>

          <div class="col-md-3 col-sm-12 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
            <div class="service-icon">
              <i class="fa fa-umbrella icon-large"></i>
            </div>
            <div class="service-content">
              <h4><?php echo $title2;?></h4>
              <p><?php echo $des2;?></p>
            </div>
          </div>  

          <div class="col-md-3 col-sm-12 service-box service-center" data-animation="fadeIn" data-animation-delay="03">
            <div class="service-icon">
              <i class="fa fa-scissors icon-large"></i>
            </div>
            <div class="service-content">
              <h4><?php echo $title3;?></h4>
              <p><?php echo $des3;?></p>
            </div>
          </div>  

          <div class="col-md-3 col-sm-12 service-box service-center" data-animation="fadeIn" data-animation-delay="04">
            <div class="service-icon">
              <i class="fa fa-wrench icon-large"></i>
            </div>
            <div class="service-content">
              <h4><?php echo $title4;?></h4>
              <p><?php echo $des4;?></p>
            </div>
          </div>  
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </div>
    <!-- End Services Section -->



    <!-- Start Portfolio Section -->
    <div class="section full-width-portfolio" style="padding-bottom: 0px;border-top:0; border-bottom:0; background:#fff;">

      <!-- Start Big Heading -->
      <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
        <h1>Our <strong>Product</strong></h1>
      </div>
      <!-- End Big Heading -->

      <!-- <p class="text-center">Sub title for product.</p> -->

      <!-- <div class="portfoliowrapper "> -->
<!--         <div class="contentheaderspace">
          
        </div> -->
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
      <!-- </div> -->


    </div>
    <!-- End Portfolio Section -->




<?php get_footer();?> 

