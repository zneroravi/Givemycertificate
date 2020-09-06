<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="certificate generator">
  <meta name="keywords" content="digital certificate, certificate, digital india">
  <meta name="viewport" content= "width=device-width, initial-scale=1.0"> 



  <link href="givemycertificate.com" rel="canonical">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
  <title>Give My Certificate</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173970539-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-173970539-1');
</script>

  <style type="text/css">
    @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300);


#social-platforms {
  position:top;
  
  font-size:1rem;
  text-align:center;
  height:250px;
  overflow:hidden;
}

/*Pen code from this point on*/
.btns {
  clear:both;
  white-space:nowrap;
  font-size:.8em;
  display:inline-block;
  border-radius:5px;
  box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.35);
  margin:2px;
  -webkit-transition:all .5s;
  -moz-transition:all .5s;
  transition:all .5s;
  overflow:hidden
}

.btns:hover {
  box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.45);
}

.btns:focus {
  box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.4);
}

.btns > span,.btns-icon > i {
  float:left;
  padding:13px;
  -webkit-transition:all .5s;
  -moz-transition:all .5s;
  transition:all .5s;
  line-height:1em
}

.btns > span {
  padding:14px 18px 16px;
  white-space:nowrap;
  color:#FFF;
  background:#b8b8b8
}

.btns:focus > span {
  background:#9a9a9a
}

.btns-icon > i {
  border-radius:5px 0 0 5px;
  position:relative;
  width:13px;
  text-align:center;
  font-size:1.25em;
  color:#fff;
  background:#212121
}

.btns-icon > i:after {
  content:"";
  border:8px solid;
  border-color:transparent transparent transparent #222;
  position:absolute;
  top:13px;
  right:-15px
}

.btns-icon:hover > i,.btns-icon:focus > i {
  color:#FFF
}

.btns-icon > span {
  border-radius:0 5px 5px 0
}

/*Facebook*/
.btns-facebook:hover > i,.btns-facebook:focus > i {
  color:#3b5998
}

.btns-facebook > span {
  background:#3b5998
}

/*Twitter*/
.btns-twitter:hover > i,.btns-twitter:focus > i {
  color:#55acee
}

.btns-twitter > span {
  background:#55acee
}

/*Google*/
.btns-googleplus:hover > i,.btns-googleplus:focus > i {
  color:#dd4b39
}

.btns-googleplus > span {
  background:#dd4b39
}

/*instagram*/
.btns-instagram:hover > i,.btns-instagram:focus > i {
  color:#3f729b
}

.btns-instagram > span {
  background:#3f729b
}

/*LinkedIn*/
.btns-linkedin:hover > i,.btns-linkedin:focus > i {
  color:#007bb6
}

.btns-linkedin > span {
  background:#007bb6
}


  </style>
</head>
<body data-spy="scroll" data-target=".navbar" class="has-loading-screen">
    <div class="ts-page-wrapper" id="page-top">

       <?php
       include "inc/header.html";
       include "inc/about.html";
       include "inc/count.php";
       include 'inc/about2.html';
       include 'inc/price.html';
       include 'inc/feature.html';
       include 'inc/footer.html';
       ?>
           

    </div>

    <script>
        if( document.getElementsByClassName("ts-full-screen").length ) {
            document.getElementsByClassName("ts-full-screen")[0].style.height = window.innerHeight + "px";
        }
    </script>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
  <script src="assets/js/isInViewport.jquery.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/scrolla.jquery.min.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/jquery-validate.bootstrap-tooltip.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-app.js"></script>
  <script src="assets/js/firebase.js"></script>

    <!--Google map-->

    <script>
        var latitude = 34.038405;
        var longitude = -117.946944;
        var markerImage = "assets/img/map-marker.png";
        var mapElement = "map";
        var mapStyle = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#dbdbdb"},{"visibility":"on"}]}];
        google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapStyle, mapElement));
    </script>

</body>
</html>
