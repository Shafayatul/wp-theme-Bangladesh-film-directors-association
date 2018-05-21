<?php
ob_start();
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title><?php bloginfo('name'); ?></title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Description">
  <meta name="author" content="GrayGrids">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Revolution Slider -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/settings.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slicknav.css" media="screen" type="text/css" >

  <!--  CSS Styles  -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" media="screen" type="text/css" >

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" media="screen" type="text/css" >

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" media="screen" type="text/css" >

  <!-- Color Defult -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/colors/red.css" media="screen" type="text/css" >



  <!-- google font Oswald  -->
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
  
 

  <!-- JS  -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.migrate.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizrr.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.appear.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/count-to.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.textillate.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.lettering.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easypiechart.min.js"></script>
  <!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.js"></script> -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/skrollr.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.parallax.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mediaelement-and-player.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.slicknav.js"></script> 


  <!-- Slider -->
<!--   <script src="<?php echo get_template_directory_uri(); ?>/src/skdslider.js"></script>
  <link href="<?php echo get_template_directory_uri(); ?>/src/skdslider.css" rel="stylesheet">
  <script type="text/javascript">
      jQuery(document).ready(function(){
        
        jQuery('#demo1').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'
        });

        jQuery('#responsive').change(function(){
          $('#responsive_wrapper').width(jQuery(this).val());
          $(window).trigger('resize');
        });
        
      });
  </script>   -->   
 
  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->


  <!-- custom css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" media="screen" />
  <?php wp_head();?> 
</head>

<body style="text-align: justify;">

  <!-- Full Body Container -->
  <div id="container">

    <!-- Start Header Section -->
    <header class="clearfix">
      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> Shaza Building B1 Airport Highway Beirut-Lebanon</a>
                </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> info@mts-sarl.com</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> +961 78 999 965</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-5">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>  
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li> 
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Youtube" href="#"><i class="fa fa-youtube-play"></i></a>
                </li>                                             
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="<?php bloginfo('home');?>">
              <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="small-logo">
              <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo-big.jpeg" style="z-index: 100000; position: relative;" class="big-logo">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Start Navigation List -->
            <br>
            <ul class="nav navbar-nav">
              <li class="url_nav">
                <a class="active home_nav" href="<?php bloginfo('home');?>"><b>Home</b></a>
              </li>

              <li class="url_nav">
                <a href="<?php echo site_url('/director-guilds/');?>"><b>Director Guilds</b></a>
              </li>
              <li class="url_nav">
                <a href="<?php echo site_url('/events/');?>"><b>Events</b></a>
              </li>
              <li class="url_nav">
                <a href="<?php echo site_url('/history/');?>"><b>History</b></a>
              </li>
              <li class="url_nav">
                <a href="<?php echo site_url('/journal/');?>"><b>Journal</b></a>
              </li>
              <li class="url_nav">
                <a href="<?php echo site_url('/blog/');?>"><b>Blog</b></a>
              </li>
              <li class="url_nav">
                <a href="<?php echo site_url('/gallery/');?>"><b>Gallery</b></a>
              </li>




<!--               <li class="url_nav">
                <a href="<?php echo site_url('/cv-upload/');?>"><b>Careers</b></a>
                 <ul class="dropdown">
                  <li><a href="<?php echo site_url('/cv-upload/');?>"><b>Upload cv</b></a></li>
                </ul>          
              </li> -->
              <li class="url_nav">
                <a href="<?php echo site_url('/about-us/');?>"><b>About us</b></a>
              </li>              
              <li class="url_nav">
                <a href="<?php echo site_url('/contact-us/');?>"><b>Contact us</b></a>
              </li>
              <?php if(is_user_logged_in()){ ?>
              <li>
                <a class="url_nav" href="<?php echo wp_logout_url(site_url('/my-account/')); ?>"><b>Profile</b></a>
              </li>
              <li>
                <a class="url_nav" href="<?php echo wp_logout_url(site_url('')); ?>"><b>Logout</b></a>
              </li>
              <?php }else{ ?>
              <li>
                <a class="url_nav" href="<?php echo wp_logout_url(site_url('/login/')); ?>"><b>Login</b></a>
              </li>
              <li>
                <a class="url_nav" href="<?php echo wp_logout_url(site_url('/signup/')); ?>"><b>Signup</b></a>
              </li>
              <?php } ?>


            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a class="menu-new-style active home_nav"   href="<?php bloginfo('home');?>">Home</a>
          </li>

          <li>
            <a class="menu-new-style" href="<?php echo site_url('/director-guilds/');?>">Director Guilds</a>
          </li>
          <li>
            <a class="menu-new-style" href="<?php echo site_url('/events/');?>">Events</a>
          </li>
          <li>
            <a class="menu-new-style" href="<?php echo site_url('/history/');?>">History</a>
          </li>
          <li>
            <a class="menu-new-style" href="<?php echo site_url('/journal/');?>">Journal</a>
          </li>
          <li>
            <a class="menu-new-style" href="<?php echo site_url('/blog/');?>">Blog</a>
          </li>
          <li>
            <a class="menu-new-style" href="<?php echo site_url('/gallery/');?>">Gallery</a>
          </li>

<!--           <li>
            <a class="menu-new-style" href="<?php echo site_url('/cv-upload/');?>">Careers</a>
            <ul class="dropdown">
              <li><a class="menu-new-style" href="<?php echo site_url('/cv-upload/');?>">Upload cv</a></li>
            </ul>                
          </li> -->
          <li>
            <a class="menu-new-style" href="<?php echo site_url('/about-us/');?>">About us</a>
          </li>          
          <li>
            <a class="menu-new-style" href="<?php echo site_url('/contact-us/');?>">Contact us</a>
          </li>
          <?php if(is_user_logged_in()){ ?>
          <li>
            <a class="menu-new-style" href="<?php echo wp_logout_url(site_url('/my-account/')); ?>">Profile</a>
          </li>
          <li>
            <a class="menu-new-style" href="<?php echo wp_logout_url(site_url('')); ?>">Logout</a>
          </li>
          <?php }else{ ?>
          <li>
            <a class="menu-new-style" href="<?php echo wp_logout_url(site_url('/login/')); ?>">Login</a>
          </li>
          <li>
            <a class="menu-new-style" href="<?php echo wp_logout_url(site_url('/signup/')); ?>">Signup</a>
          </li>
          <?php } ?>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->

    <script type="text/javascript">
      jQuery(document).ready(function(){
        // url active class
        var is_home = true;
        jQuery(".url_nav > a").removeClass("active");
        var url      = window.location.href;
        jQuery(".url_nav > a").each(function(){
          if(jQuery(this).attr("href") == url){
            jQuery(this).addClass("active");
            is_home = false;
          }
        });
        if(is_home){
          jQuery(".home_nav").addClass("active");
        }



        var isSmallLogo = false;
        
        if(jQuery( window ).width()>768){
          
          jQuery(".small-logo").hide();
          jQuery(".big-logo").show();
          jQuery(window).scroll(function (event) {
            var scroll = jQuery(window).scrollTop();
            if((scroll>50) && (isSmallLogo==false)){
              jQuery(".small-logo").show();
              jQuery(".big-logo").hide();
              isSmallLogo = true;
            }else if((scroll<50) && (isSmallLogo==true)){
              jQuery(".small-logo").hide();
              jQuery(".big-logo").show();
              isSmallLogo = false;
            }
          });
        }else{
          jQuery(".big-logo").hide();
        }


        jQuery(document).on("hover",".small-logo",function(){
          if((jQuery( window ).width()>768)){
            jQuery(".small-logo").hide();
            jQuery(".big-logo").show();
            isSmallLogo = false;          
          }
        });

        jQuery(document).on("mouseout",".big-logo",function(){
          var scroll = jQuery(window).scrollTop();
          if((jQuery( window ).width()>768) && (scroll>50)){
            jQuery(".small-logo").show();
            jQuery(".big-logo").hide();
            isSmallLogo = true;
          }
        });


      });
    </script>