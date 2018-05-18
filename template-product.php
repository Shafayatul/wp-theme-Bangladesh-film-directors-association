<?php 
/*
Template Name: Products
*/
get_header();?> 
  



    <!-- Start Portfolio Section -->
    <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;">

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

