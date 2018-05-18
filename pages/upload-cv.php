<?php include("includes/header.php");?>


    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background-color: #12477B; color: white;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
<!--             <h2>CV Upload</h2>
            <p>We Are Hiring</p> -->
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li><a href="#">Career</a></li>
              <li>CV Upload</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">


          <div class="row">

            <div class="col-md-6">

              <!-- Classic Heading -->
              <h2 class="classic-title"><span><b>Upload Your CV here</b></span></h2>

              <!-- Start Contact Form -->
              <form role="form" id="contactForm" data-toggle="validator" class="shake">
                <div class="form-group">
                  <div class="controls">
                    <input type="text" id="name" placeholder="Title" required data-error="Please enter  Title">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="text" id="fname" placeholder="First Name" required data-error="Please enter your First name">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="text" id="lname" placeholder="Last Name" required data-error="Please enter your Last name">
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
                    <input type="text" id="phone" placeholder="Phone Number" required data-error="Please enter your Phone Number">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>                
                <div class="form-group">
                  <div class="controls">
                    <textarea id="message" rows="7" placeholder="Comment" required data-error="Write your Comment"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="btn btn-default">
                      Upload CV <input type="file" hidden>
                  </label>
                </div>
                <button type="submit" id="submit" class="btn btn-system btn-large btn-block" style="width: 100%">Send</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                <div class="clearfix"></div>   

              </form>     
              <!-- End Contact Form -->

            </div>

            <div class="col-md-6">
              <img src="images/cv.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End content -->
    <script type="text/javascript">
    //   $(document).ready(function(){
    //         $(':file').on('fileselect', function(event, numFiles, label) {
    //     console.log(numFiles);
    //     console.log(label);
    // });
    //             $(document).on('change', ':file', function() {
    //         var input = $(this),
    //             numFiles = input.get(0).files ? input.get(0).files.length : 1,
    //             label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    //         input.trigger('fileselect', [numFiles, label]);
    //     });
    //   });
    </script>


<?php include("includes/footer.php");?>