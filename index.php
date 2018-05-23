<?php get_header();?> 

 <?php if(have_posts()): ?>
    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background-color: #12477B; color: white;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->
 <?php while(have_posts()):the_post(); ?> 



    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">


          <div class="row">

            <div class="col-md-12">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span><a href="<?php the_permalink(); ?>"><?php the_title();?></a></span></h4>
              <!-- Some Text -->
              <p><?php the_excerpt ();?></p>
              <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>

              <!-- Start Pagination --> 
            </div>
          </div>
        
        </div>
      </div>
    </div>
    <!-- End content -->

        <?php endwhile; ?>

        <?php endif; ?>      
<?php get_footer();?> 