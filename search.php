<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="style/images/favicon.ico">
  <title>Certificate Verification | Give My Certificate</title>
  <link
  rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous"
/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="shortcut icon" href="../assets/img/favicon.ico" />

  <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="style/revolution/css/settings.css">
  <link rel="stylesheet" type="text/css" href="style/revolution/css/layers.css">
  <link rel="stylesheet" type="text/css" href="style/revolution/css/navigation.css">
  <link rel="stylesheet" type="text/css" href="style/type/type.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style/css/color/purple.css">
  <style>
          .has-search .form-control {
        padding-left: 2.375rem;
      }

      .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.375rem;
        height: 2.375rem;
        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
      }
      .pad{
        padding: 14em;
      }
      button{
        padding-left:2.5em !important;
        padding-right: 2.5em !important;

      }
      .overlay-qr{
     

      }
      body{
        overflow-x: hidden;
        padding: 0;
        margin: 0;
      }
      input{
        padding: 1em !important;
      }
      .holder{
        position: relative;
      }
      .qr{
        position: absolute;
        top: 25%;
    left: 50%;
    transform: translate(-50%, 0);
  
      }
    svg#icon-qr-code {
    height:70%;
    width: 70%;
}

      
    svg {
      text-align: center;
      margin: auto;
      width: 100px;
      height: 100px;
    }

    #icon-qr-code .scan-bar {
  animation: scanning-bar linear 2s;
  animation-iteration-count: infinite;
  transform-origin: 50% 50%;
  -webkit-animation: scanning-bar linear 2s;
  -webkit-animation-iteration-count: infinite;
  -webkit-transform-origin: 50% 50%;
}

@keyframes scanning-bar {
  0% {
    -webkit-transform: translate(0px, 0px);
            transform: translate(0px, 0px);
  }
  24% {
    -webkit-transform: translate(0px, 20px);
            transform: translate(0px, 20px);
  }
  33% {
    -webkit-transform: translate(0px, 20px);
            transform: translate(0px, 20px);
  }
  50% {
    -webkit-transform: translate(0px, 24px);
            transform: translate(0px, 24px);
  }
  100% {
    -webkit-transform: translate(0px, 24px);
            transform: translate(0px, 24px);
  }
  100% {
    -webkit-transform: translate(0px, 0px);
            transform: translate(0px, 0px);
  }
}

@-webkit-keyframes scanning-bar {
  0% {
    -webkit-transform: translate(0px, 0px);
  }
  24% {
    -webkit-transform: translate(0px, 20px);
  }
  33% {
    -webkit-transform: translate(0px, 20px);
  }
  50% {
    -webkit-transform: translate(0px, 24px);
  }
  100% {
    -webkit-transform: translate(0px, 24px);
  }
  100% {
    -webkit-transform: translate(0px, 0px);
  }
}
      .slave{

    height: 50vh !important;
    width: 50vw;
    object-fit: cover;
    border-radius: 10px;
      }
      .boxi{
        position: relative;
        height: 100%;
        width: 100%;
      }
      .input-group>.form-control:not(:last-child){
        border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
      }
      
      @media (max-width:475px){
        .pad{
          padding: 1em;

        }
        button{
          padding-left: 1em !important;
          padding-right: 1em !important;
        }
        .add{
          height: 60vh;
        }

       
      }
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
      <script type="text/javascript">
        function funsearch() {
          // body...
          var certid = document.getElementById("searchtext").value;
          if(!certid){
            return alert('Please Enter a certificate id');
          }
  
          window.location =
            "https://verify.givemycertificate.com/verify/" + certid;
        }
      </script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173970539-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-173970539-1');
</script>
</head>
<body>
    <?php
    include 'inc/nav2.html';
    ?>
    <!-- /.offcanvas-info -->
    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="style/images/art/bg_1.jpg">
      <div class="container inner text-center">
        <div class="space90"></div>
        <h1 class="page-title">Verify Your Certificate</h1>
        <p class="lead">We are 100% trustable and have blazing fast verification for certificates.</p>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper light-wrapper">
      <div class="container inner">
        <ul class="list-unstyled row">
          <li class="col-lg-10 offset-lg-1 mb-70">
            <div class="row gutter-60 align-items-center">
              <div class="col-md-6">
                <figure><img src="#" srcset="style/images/concept/concept1.png 1x, style/images/concept/concept1@2x.png 2x" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col-md-6">
                <div class="container">
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="searchtext"
                      placeholder="Enter Certificate ID"
                    />
                    <div class="input-group-append">
                      <button
                        class="btn btn-secondary"
                        onclick="funsearch()"
                        type="button"
                        style="    margin-bottom: 8px;"
                      >
                        <i class="fa fa-search"></i>
                      </button>
                      <button
                      class="btn btn-primary"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseExample"
                      aria-expanded="false"
                      aria-controls="collapseExample"
                      style="    margin-bottom: 8px;"
                      onclick="start()"
                    >
                  <i class="fa fa-qrcode" aria-hidden="true"></i>
                    </button>
                    </div>
                  </div>
                 
                  <p class="d-flex justify-content-center">
      
                      <div class=" collapse holder" id="collapseExample">
                          <div class="row">
                          
                            
                            <div>
                              <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
                            
    
                                <div class="boxi">
                                <video id="preview" class=" add slave active" style="width:100%;" autoplay="autoplay"></video>
                                <!-- <div class="overlay-qr">
                                  <div class="qr">
                                    <svg id="icon-qr-code" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 23.44">
                               
                                      <path fill="#282828" d="M17.59 0c-.6 0-1 .77-.33 1.37h5.59v5.57c.6.69 1.37.27 1.37-.33V0zM2.16 6.61V1.37h5.57C8.42.77 8 0 7.4 0H.78v6.94c.61.69 1.38.27 1.38-.33zM7.4 23.44c.6 0 1-.77.33-1.38H2.16v-5.57c-.61-.68-1.38-.26-1.38.33v6.62zM24.23 23.44v-6.95c-.61-.68-1.37-.26-1.37.33v5.24h-5.63c-.69.61-.27 1.38.33 1.38z"/>
                                      <path fill="#282828" d="M4.23 16.9a.69.69 0 0 0-.69.69v2.24a.86.86 0 0 0 .86.86h2.13a.69.69 0 0 0 0-1.38H4.92v-1.74a.69.69 0 0 0-.69-.67zM16.85 6.32h1.02v1.02h-1.02z"/>
                                      <path fill="#282828" d="M20.62 2.72H14.1a.86.86 0 0 0-.86.85v6.53a.86.86 0 0 0 .86.85h6.52a.86.86 0 0 0 .86-.85V3.57a.86.86 0 0 0-.86-.85zm-2.19 2.23a.81.81 0 0 1 .81.81v2.15a.81.81 0 0 1-.81.81h-2.14a.81.81 0 0 1-.81-.81V5.76a.81.81 0 0 1 .81-.81zM8.11 15.16c0 .6.77 1 1.37.33v-2.73a.12.12 0 0 0-.12-.12H6.23c-.69.61-.27 1.37.33 1.37h1.6z"/>
                                      <path fill="#282828" d="M10.23 12.83v4.5h-3v-2.07c-.6-.69-1.37-.27-1.37.33v3.12h5.77v-5.55c-.04-.61-.81-1.03-1.4-.33zM8.11 20.01a.68.68 0 0 0 .68.68h2.11a.68.68 0 0 0 .69-.68.69.69 0 0 0-.69-.69H8.79a.69.69 0 0 0-.68.69zM4.23 16.44a.69.69 0 0 0 .69-.69v-2.6a.69.69 0 0 0-1.38 0v2.6a.69.69 0 0 0 .69.69zM16.85 16.07h1.02v1.02h-1.02z"/>
                                      <path fill="#282828" d="M13.23 13.31v6.52a.86.86 0 0 0 .86.85h6.52a.86.86 0 0 0 .86-.85V13.3a.86.86 0 0 0-.86-.85h-6.52a.86.86 0 0 0-.86.86zm5.19 1.38a.81.81 0 0 1 .81.81v2.15a.81.81 0 0 1-.81.81h-2.14a.81.81 0 0 1-.81-.81V15.5a.81.81 0 0 1 .81-.81zM7.13 6.32h1.02v1.02H7.13z"/>
                                      <path fill="#282828" d="M11.75 10.11V3.58a.85.85 0 0 0-.85-.85H4.38a.85.85 0 0 0-.86.85v6.53a.85.85 0 0 0 .86.85h6.52a.85.85 0 0 0 .85-.85zM6.57 8.72a.82.82 0 0 1-.82-.81V5.76a.82.82 0 0 1 .82-.81h2.14a.81.81 0 0 1 .81.81v2.15a.81.81 0 0 1-.81.81z"/>
                                      <rect class="scan-bar"  fill="#ea3970" width="25" height="1.72" rx=".27" ry=".27"/></svg>
                                </div>
                                </div> -->
                              </div>
                              <script type="text/javascript">
                              function start(){
                                var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: false });
                                scanner.addListener('scan',function(content){
                                  window.location.href=content;
                                });
                                var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
                                      var element = document.getElementById('text');
                      
                                Instascan.Camera.getCameras().then(function (cameras){
                                  if(cameras.length>0){
                                    if(isMobile){
                                      scanner.start(cameras[1]);
                                    }else{
                                      scanner.start(cameras[0]);
                                    }
                                  }else{
                                    console.error('No cameras found.');
                                    alert('No cameras found.');
                                  }
                                }).catch(function(e){
                                
                                });
                              }
                              </script>
                            </div>
                            
                            
                            <div class="col-sm-3">
                            </div>
                          
                          </div>
                        </div>
          
                  </p>
                  <h3 class="mt-4 text-center font-weight-bold text-dark ">Scan Your QR Code Here 🕵</h3>
                </div>
                
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </li>
          
        </ul>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    </div>
    <?php
    include 'inc/footer.html';
    ?>

  </div>
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