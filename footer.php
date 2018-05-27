

<script type="text/javascript">
      jQuery(document).ready(function(){

        if(jQuery( window ).width()>768){

          var fullWidth =  jQuery(".product_div").width();
          var eachWidth = parseInt((fullWidth)/4);
          var j=0;
          var singleWidthArray = [];
          for(var i=0; i<4; i++){
            singleWidthArray.push(j);
            j=j+eachWidth;
          }

          i=0;
          var total_div_height = eachWidth;
          var topPx = 20;
          var toMinus = false;
          jQuery(".project-post").each(function(){
            jQuery(this).css("left",singleWidthArray[i]);
            jQuery(this).css("top",topPx+'px');
            i++;
            toMinus = false;
            if((i == 4)){
              i=0;
              topPx = topPx + eachWidth;
              total_div_height = total_div_height+eachWidth;
              toMinus = true;
            }
          });
          if(toMinus){
            total_div_height = total_div_height - eachWidth;
          }
          total_div_height = total_div_height+40;
          jQuery(".portfolio-box").css("height",total_div_height+"px");

        }else{

          var eachWidth = jQuery(".product_div").width();
          var i=0;
          var topPx = 20;
          jQuery(".project-post").each(function(){

            jQuery(this).css("left",'0px');
            jQuery(this).css("top",topPx+'px');
            
            topPx = topPx + eachWidth + 10;
            i++;
          });

          var total_div_height = (eachWidth*i)+i*12;
          jQuery(".portfolio-box").css("height",total_div_height+"px");

        }


      });
    </script>

    <!-- Start Footer Section -->
    <footer>
      <div class="container">
        <div class="row footer-widgets">
          <!-- Start Twitter Widget -->
          <div class="col-md-4 col-xs-12">
            <div class="footer-widget social-widget">
              <h4>Follow Us<span class="head-line"></span></h4>
              <ul class="social-icons">
                <li>
                  <a class="facebook" href="https://www.facebook.com/Directors.guildbd/"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="google" href="https://www.youtube.com/channel/UCX_35yaIhi_SbhSRpLAglXw"><i class="fa fa-youtube-play"></i></a>
                </li>
<!--                  <li>
                  <a class="google" href="https://plus.google.com/114330195308861604957"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="instgram" href="#"><i class="fa fa-instagram"></i></a>
                </li> -->
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Twitter Widget -->


          <!-- Start Flickr Widget -->
          <div class="col-md-4 col-xs-12">
            <div class="footer-widget flickr-widget">
              <h4>Slogan<span class="head-line"></span></h4>
              <p>Director's Guild - television Drama Director's Organization</p>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Flickr Widget -->


          <!-- Start Contact Widget -->
          <div class="col-md-4 col-xs-12">
            <div class="footer-widget contact-widget">
              <h4>Address<span class="head-line"></span></h4>
              <ul>
                <li><span>Location:</span>  House: 221, Road: 02, Block: A, Niketon, Gulshan-1.</li>
                <li><span>Phone Number:</span> +88 01733879143</li>
                <li><span>Email:</span> info@directorsguildbd.com</li>
                <li><span>Website:</span> www.directorsguildbd.com</li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->
        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
               <div class="col-md-3">

            </div>
            <div class="col-md-6 ">
              <p class="dev_name">Copyright © 2018 Director's Guild - Designed &amp; Developed by <a href="http://www.nurdcoder.com">NurdCoder</a></p>
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-3">

            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer Section -->


  </div>
  <!-- End Full Body Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!--   <div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div> -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer();?> 
</body>

</html>