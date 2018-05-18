<?php include("includes/header.php");?>




    <!-- Start Map -->
    <div id="map"></div>

    <script>

      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.

      function initMap() {
        var lebanon = {lat:33.8938, lng:35.5018}; 
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
    <div id="content" style="background: url(images/contact-us.jpg) no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; color: #fff;">
      <div class="container">

        <div class="row">

          <div class="col-md-8">

            <!-- Classic Heading -->
            <h2 class="classic-title" style="color: #fff;"><span><b>Contact Us</b></span></h2>

            <!-- Start Contact Form -->
            <form role="form" id="contactForm" data-toggle="validator" class="shake">
              <div class="form-group">
                <div class="controls">
                  <input type="text" id="name" placeholder="Name" required data-error="Please enter your name">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="email" class="email" id="email" placeholder="Email" required data-error="Please enter your email">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" id="msg_subject" placeholder="Subject" required data-error="Please enter your message subject">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <textarea id="message" rows="7" placeholder="Massage" required data-error="Write your message"></textarea>
                  <div class="help-block with-errors"></div>
                </div>  
              </div>

              <button type="submit" id="submit" class="btn-system btn-large">Send</button>
              <div id="msgSubmit" class="h3 text-center hidden"></div> 
              <div class="clearfix"></div>   

            </form>     
            <!-- End Contact Form -->

          </div>

          <div class="col-md-4">

            <!-- Classic Heading -->
            <h4 class="classic-title" style="color: #fff;"><span>Information</span></h4>

            <!-- Some Info -->
            <p style="color: #fff;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>

            <!-- Info - Icons List -->
            <ul class="icons-list">
              <li><i class="fa fa-globe"  style="color: #fff;">  </i> <strong>Address:</strong> Airport Highway Shaza Building B1</li>
              <li><i class="fa fa-envelope-o"  style="color: #fff;"></i> <strong>Email:</strong> info@mts-sarl.com</li>
              <li><i class="fa fa-mobile"  style="color: #fff;"></i> <strong>Phone:</strong> +961 70156520</li>
            </ul>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:15px;"></div>

            <!-- Classic Heading -->
            <h4 class="classic-title" style="color: #fff;"><span>Working Hours</span></h4>

            <!-- Info - List -->
            <ul class="list-unstyled">
              <li><strong>Monday - Friday</strong> - 9am to 5pm</li>
              <li><strong>Saturday</strong> - 9am to 2pm</li>
              <li><strong>Sunday</strong> - Closed</li>
            </ul>

          </div>

        </div>

      </div>
    </div>
    <!-- End content -->

<?php include("includes/footer.php");?>