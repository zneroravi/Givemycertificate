<?php
  $certId = $_REQUEST['certificateId'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta property="og:title" content="I am a corona warrior, Are you?" />
    <meta property="og:image" content="https://storage.googleapis.com/gmc-covid19/covid19/<?php echo $certId; ?>.webp" />
    <meta property="og:url" content="https://givemycertificate.com/components/covid19/?certificateId=<?php echo $certId; ?>" />
    <meta property="og:description" content="Are you ready to show the world that you've got what it takes to save your country and your loved once.

So you have powers? Right! we all have powers like controling our mind to stay inside and keep our surrounding safe.

You know there is more you can do staying inside like showing the world the champion in you. To do so participate in the Corona Warrior league and get your warrior certificate and show it to the world that -

Yes! we have the power to save the world!" />

    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Give My Certificate</title>
    <!-- MDB icon -->
    <!-- <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" /> -->
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f19e56a8aa12700134b0c27&product=inline-share-buttons&cms=sop' async='async'></script>

    <script type="text/javascript">
      var canvas = document.getElementById("certImage");
      var context = canvas.getContext("2d");

      var myImg = new Image();
      img.onload = function() {
        context.drawImage(myImg, 0, 0);
      };
      img.src = 'https://storage.googleapis.com/gmc-covid19/covid19/<?php echo $certId; ?>.webp';
    </script>

  </head>
  <body>
    <!-- Start your project here-->
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
      <a
        class="navbar-brand"
        href="https://www.givemycertificate.com/"
        class="text-white font-weight-bold"
      >
        <img
          src="img/gmclogo.png"
          width="40"
          height="35"
          class="d-inline-block"
          alt=""
        />

        Give My Certificate
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent-4"
        aria-controls="navbarSupportedContent-4"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="https://www.givemycertificate.com/search.html">
              <i class="fas fa-certificate " aria-hidden="true"></i>Verification Portal
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://verify.givemycertificate.com/verify/<?php echo $certId; ?>">
              <i class="fas fa-check " aria-hidden="true"></i> Verify
              Certificate</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.givemycertificate.com/">
              <i class="fas fa-home " aria-hidden="true"></i>
              Home</a
            >
          </li>
        </ul>
      </div>
    </nav>
    <!--/.Navbar -->
    <div class="row">
      <div class="col-md-12">
        <div id="mdb-lightbox-ui"></div>

        <div class="mdb-lightbox">
          <div class="container-fluid box">
            <div class="row image-box">
              <div class="container col-md-9 align-self-center humb">
                <figure class="col-md-12 padder  ">
                  <a
                    href="https://storage.googleapis.com/gmc-covid19/covid19/<?php echo $certId; ?>.webp"
                    class="topper"
                    data-size="1600x1067"
                  >
                    <img
                      src="https://storage.googleapis.com/gmc-covid19/covid19/<?php echo $certId; ?>.webp"
                      data-size="1600x1067"
                      alt="placeholder"
                      class="img-fluid image-certificate view overlay rounded z-depth-4 swing-in-top-fwd"
                    />
                  </a>
                </figure>
              </div>
              <div class="col-md-3">
                <div class="container z-depth-2">
                  <!-- Section: Block Content -->
                  <section>
                    <!-- Modal -->
                    <div
                      class="modal fade"
                      id="modal1"
                      tabindex="-1"
                      role="dialog"
                      aria-labelledby="exampleModalLabel"
                      aria-hidden="true"
                    >
                      <div
                        class="modal-dialog modal-lg modal-dialog-centered"
                        role="document"
                      >
                        <div class="modal-content">
                          <div
                            class="embed-responsive embed-responsive-16by9 z-depth-1-half"
                          >
                            <div class="container qr-box">
                              <img
                                src="img/websiteQRCode_noFrame.png"
                                alt="placeholder"
                                class="img-fluid  rounded z-depth-4 qr"
                              />
                            </div>
                            <canvas id="certImage"> </canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="container mt-3">
                      <h3 class="font-weight-bold text-center dark-grey-text p">
                        <span class="typing"
                          >Explore
                          <i class="fas fa-business-time text-warning"></i
                        ></span>
                      </h3>
                      <script type="text/javascript">
                        var typed = new Typed(".typing", {
                          strings: [
                            "Learn ",
                            "Grow  <i class='fas fa-heart text-danger' ></i>",
                            "Learn <i class='fas fa-check text-success'></i>"
                          ],
                          smartBackspace: true,
                          typeSpeed: 50,
                          loop: true,
                          backSpeed: 60,
                          backDelay: 1000,
                          startDelay: 400
                        });
                      </script>
                      <hr class="w-header my-2" />
                      <p class="lead text-center text-muted pt-2 ">
                        Share your Corona Warrior certificate with pride and
                        lead the way for others
                      </p>
                      <div class="container text-center mb-3">
                        <div class="sharethis-inline-share-buttons"></div>
                        <!-- <a
                          type="button"
                          class="btn-floating btn-success btn-sm"
                        >
                          <i class="fab fa-whatsapp"></i>
                        </a>
                        <a type="button" class="btn-floating btn-fb btn-sm">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                        <a type="button" class="btn-floating btn-tw btn-sm">
                          <i class="fab fa-twitter"></i>
                        </a>
                        <a type="button" class="btn-floating btn-li btn-sm">
                          <i class="fab fa-linkedin-in"></i>
                        </a> -->
                      </div>

                      <div class="container d-flex buttons">
                        <button 
                          type="button" 
                          class="btn btn-primary"
                          onclick="
                            var link = document.createElement('a'); 
                            link.download = 'coronaWarrior.png';
                            link.href = document.getElementById('certImage').toDataURL();
                            link.click();"
                        >
                          <p class="p-0 m-0 download">
                            Download
                            <i class="fa fa-download" aria-hidden="true"></i>
                          </p>
                          <p class="p-0 m-0 download-desk">
                            Download
                            <i class="fa fa-download" aria-hidden="true"></i>
                          </p>
                        </button>
                        
                          <button 
                            type="button" 
                            class="btn btn-secondary"
                            onclick="location.href='https://givemycertificate.com/components/coronaWarrior/coronaWarriorCertificate.html'"
                          >
                            Create New
                            <i class="fa fa-file-text" aria-hidden="true"></i>
                          </button>
                        
                      </div>

                      <div class="row">
                        <div class="col-md-8 mx-auto  pt-4">
                          <div class="view z-depth-1 rounded">
                            <!-- <img
                              class="rounded img-fluid"
                              src="img/websiteQRCode_noFrame.png"
                              alt="Video title"
                            /> -->
                            <div class="mask flex-center rgba-white-light">
                              <a
                                id="play"
                                class="btn-floating btn-danger btn-lg"
                                data-toggle="modal"
                                data-target="#modal1"
                                ><i class="fas fa-play"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <!-- Section: Block Content -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End your project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript">
      $(function() {
        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
      });
    </script>
  </body>
</html>
