<?php 
/*
Template Name: CV Upload
*/
get_header();
include(TEMPLATEPATH."/phpmailer/class.phpmailer.php" );
?> 


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

<?php
  if(isset($_POST["submit"])){
 
    $message = "Title: ".$_POST["Title"]."\n";
    $message .= "Phone: ".$_POST["phone"]."\n";
    $message .= "Comment: ".$_POST["message"]."\n";

    $email = new PHPMailer();
        $email->WordWrap = 50;
    $email->IsHTML(true);     
    $email->From      = $_POST["email"];
    $email->FromName  = $_POST["fname"]." ".$_POST["lname"];
    $email->Subject   = 'CV';
    $email->Body      = $message;

    $email->AddAddress( get_option('admin_email') );    
    $email->AddAttachment( $_FILES['cv']['tmp_name'], $_FILES['cv']['name'] );
        

    if($email->Send()){
      echo "<h4 class='text-center'>CV sent</h4>";
    }else{
      echo "<h4 class='text-center'>CV not sent</h4>";
    }
}
    ?>


              <!-- Classic Heading -->
              <h2 class="classic-title"><span><b>Upload Your CV here</b></span></h2>

              <!-- Start Contact Form -->
              <form role="form" id="contactForm" data-toggle="validator" class="shake" method="post" enctype='multipart/form-data'>
                <div class="form-group">
                  <div class="controls">
                    <input type="text" name="Title" placeholder="Title" required data-error="Please enter  Title">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="text" name="fname" placeholder="First Name" required data-error="Please enter your First name">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="text" name="lname" placeholder="Last Name" required data-error="Please enter your Last name">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="email" class="email" name="email" placeholder="Email" required data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="text" name="phone" placeholder="Phone Number" required data-error="Please enter your Phone Number">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>                
                <div class="form-group">
                  <div class="controls">
                    <textarea name="message" rows="7" placeholder="Comment" required data-error="Write your Comment"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="btn btn-default">
                      Upload CV <input type="file" name="cv" hidden>
                  </label>
                </div>
                <button type="submit" name="submit" class="btn btn-system btn-large btn-block" style="width: 100%">Send</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                <div class="clearfix"></div>   

              </form>     
              <!-- End Contact Form -->

            </div>

            <div class="col-md-6">
              <img src="<?php echo get_template_directory_uri(); ?>/images/cv.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End content -->
<?php get_footer();?> 