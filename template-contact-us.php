<?php 
/*
Template Name: Contact Us
*/

get_header();?> 
    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background-color: #12477B; color: white;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Map -->
    <div id="map"></div>

    <script>

      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.

      function initMap() {
        var lebanon = {lat:23.770712, lng:90.411321}; 
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: lebanon
        });

        var contentString = '';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var marker = new google.maps.Marker({
          position: lebanon,
          map: map,
          title: 'lebanon (Office)'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwiVaJLQsLSHjOOnIEFUGdTaRgEPjOFk0&callback=initMap">
    </script> 
    <!-- End Map -->

    <!-- Start Content -->
    <div id="content" style="background: url(<?php echo get_template_directory_uri(); ?>/images/contact-us.jpg) no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; color: #fff;">
      <div class="container">

        <div class="row">

          <div class="col-md-8">

            <?php
            if(isset($_POST["submit"])){
              // the message
              $msg = "Name: ".$_POST["name2"]."\n";
              $msg .= "Email: ".$_POST["email"]."\n";
              $msg .= "Message: ".$_POST["message"]."\n";

              // use wordwrap() if lines are longer than 70 characters
              $msg = wordwrap($msg,70);

              // send email
              mail(get_option('admin_email'),$_POST["msg_subject"],$msg);
              echo '<h2 style="color:white;" class="text-center">Message Sent</h2>';
            }

            ?>            

            <!-- Classic Heading -->
            <h2 class="classic-title" style="color: #fff;"><span><b>Contact Us</b></span></h2>
            <!-- Start Contact Form -->
            <form  action="" method="post">
              <div class="form-group">
                  <input class="form-control" type="text" name="name2" placeholder="Name">
              </div>
              <div class="form-group">
                  <input class="form-control" type="email" class="email" name="email" placeholder="Email" >
              </div>
              <div class="form-group">
                  <input class="form-control" type="text" name="msg_subject" placeholder="Subject">
              </div>
              <div class="form-group">
                  <textarea class="form-control" name="message" rows="7" placeholder="Massage"></textarea>
              </div>

              <button type="submit" name="submit" class="btn btn-block" style="background-color: #14477c; color: #fff;">Send</button>
            </form>     
            <!-- End Contact Form -->

          </div>

          <div class="col-md-4">

            <!-- Classic Heading -->
            <h4 class="classic-title" style="color: #fff;"><span>Information</span></h4>


            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>

            <!-- Info - Icons List -->
            <ul class="icons-list">
              <li><i class="fa fa-globe"  style="color: #fff;">  </i> <strong>Address:</strong> <br> House#110/A, Road # 2, Block # B, Niketon Housing, Gulshan - 1, Dhaka - 1212</li><br>
              <li><i class="fa fa-envelope-o"  style="color: #fff;"></i> <strong>Email:</strong> <br> info@directorsguildbd.com</li><br>
              <li><i class="fa fa-mobile"  style="color: #fff;"></i> <strong>Phone:</strong> <br> +88 01733879143</li><br>
            </ul>

            <div class="hr1" style="margin-bottom:15px;"></div>


          </div>

        </div>

      </div>
    </div>
    <!-- End content -->

<?php get_footer();?> 