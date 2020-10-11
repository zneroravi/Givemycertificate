<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="give my certificate contact" />
  <meta name="keywords" content="contact, givemycertificate, give my certificate, certificate" />
  <link rel="shortcut icon" href="style/images/favicon.ico">
  <title>Contact | Give My Certificate</title>
  <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="style/revolution/css/settings.css">
  <link rel="stylesheet" type="text/css" href="style/revolution/css/layers.css">
  <link rel="stylesheet" type="text/css" href="style/revolution/css/navigation.css">
  <link rel="stylesheet" type="text/css" href="style/type/type.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style/css/color/purple.css">
</head>
<style>
  .banner--unstick .navbar-brand a{
    color: white !important;
   
  }
  .banner--stick .navbar-brand a{
    color: #5f5757 !important;
    
  }
  @media (max-width: 576px){
    .hideen{
        display: none;
    }
}
</style>
<body>
  <div class="content-wrapper">
    
    <?php
    include 'inc/nav2.html';
    ?>

    <!-- /.offcanvas-info -->
    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="style/images/art/bg3.jpg">
      <div class="container inner text-center">
        <div class="space90"></div>
        <h1 class="page-title">Contact Us</h1>
        <p class="lead">We are here to resolve your query</p>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper light-wrapper">
      <div class="container inner">
        <div class="row">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="section-title text-center">Drop Us a Line</h2>
            <p class="text-center"></p>
            <div class="space30"></div>
            <form id="contact-form" method="post"  name="google-sheet">
              <div class="messages"></div>
              <div class="controls">
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input id="form_name" type="text" name="form_name" class="form-control" placeholder="First Name *" required="required" data-error="First Name is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input id="form_lastname" type="text" name="form_lastname" class="form-control" placeholder="Last Name *" required="required" data-error="Last Name is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input id="form_email" type="email" name="form_email" class="form-control" placeholder="Email *" required="required" data-error="Valid email is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input id="form_phone" type="tel" name="form_phone" class="form-control" placeholder="Phone">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea id="form_message" name="form_message" class="form-control" placeholder="Message *" rows="4" required="required" data-error="Message is required."></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input name="submit"  type="submit" class="btn btn-send" value="Send message">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12">
                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                  </div>
                </div>
              </div>
            </form>
            <!-- /form -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
        <!-- /.wrapper -->
    <div class="wrapper gray-wrapper">
      <div class="container inner">
        <div class="row text-center gutter-60">
          <div class="col-md-4">
            <div class="icon icon-svg mb-20"><img src="style/images/icons/ui-gps.png" alt="" /></div>
            <p class="mb-0">Gurgoan, India</p>
          </div>
          <!--/column -->
          <div class="col-md-4">
            <div class="icon icon-svg mb-20"><img src="style/images/icons/co-telephone.png" alt="" /></div>
            <p class="mb-0">+91 843-929-1909</p>
          </div>
          <!--/column -->
          <div class="col-md-4">
            <div class="icon icon-svg mb-20"><img src="style/images/icons/co-email-5.png" alt="" /></div>
            <p class="mb-0"><a class="nocolor" href="mailto:#">support@givemycertificate.com</a><br>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->

    <!--/.google-map -->
    <?php
    include 'inc/footer.html';
    ?>


  </div>
  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbyXgSndmbEtwPRlP37-mfvFnIq_gP194HvVYPWmxovWYNsbyFI/exec'
    const form = document.forms['google-sheet']
  
    form.addEventListener('submit', e => {
      e.preventDefault()

        if(document.forms['google-sheet'].form_name.value === ""|| document.forms['google-sheet'].form_lastname.value === ""|| document.forms['google-sheet'].form_email.value === ""|| document.forms['google-sheet'].form_phone.value === ""|| document.forms['google-sheet'].form_message.value === ""){
          console.log('Fill FOrm correctly')

        }else{
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
        .catch(error => console.error('Error!', error.message))
        }
     
    })
  </script>
  <!-- /.content-wrapper -->
  <script src="style/js/jquery.min.js"></script>
  <script src="style/js/popper.min.js"></script>
  <script src="style/js/bootstrap.min.js"></script>
  <script src="style/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="style/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script src="style/js/plugins.js"></script>
  <script src="style/js/scripts.js"></script>
</body>
</html>