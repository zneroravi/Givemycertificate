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
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
	<title>Give My Certificate</title>
<style>
      .soft {
        background-color: black !important;
        height: 100vh;
        margin: 0 auto;
      }
      .element {
        height: 200px;
        background: #5ce7e7;
        position: relative;
      }
      .element2 {
        height: 200px;
        background: #36d6d6;
        position: relative;
      }
      .element3 {
        height: 200px;
        background: #5ce7e7;
        position: relative;
      }
      .element4 {
        height: 200px;
        background: #36d6d6;
        position: relative;
      }
      .element:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        border-top: 42px solid black;
        border-right: 42px solid #5ce7e7;
        width: 0;
      }
      .element2:before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        border-top: 42px solid #36d6d6;
        border-left: 42px solid black;
        width: 0;
      }
      .element3:before {
        content: "";
        position: absolute;
        bottom: 0;
        right: 0;
        border-top: 42px solid #5ce7e7;
        border-right: 42px solid black;
        width: 0;
      }
      .element4:before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        border-bottom: 42px solid #36d6d6;
        border-right: 42px solid black;
        width: 0;
      }
      .color {
        color: #36d6d6;
        font-size: 1.4em;
        font-weight: bolder;
      }
      .text-white {
        text-align: right;
        font-weight: 300;
        font-size: 1.2em;
        font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
      }
      .text-white1 {
        text-align: left;
        font-weight: 300;
        font-size: 1.2em;
        font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
        color: white;
      }
      body {
        background-color: black;
      }
      .padr {
        padding-right: 1.7em;
      }
      .padl {
        padding-left: 1.7em;
      }
      .display-3 {
        font-weight: bolder;
        font-size: 5.2em;
        color: white;
      }
      .order {
        order: unset;
      }
      .bg-dark {
        background-color: black !important;
      }
      .orderx {
        order: unset;
      }
      .pt-5{
          color:white !important;
      }
      @media (max-width: 425px) {
        .order {
          order: 2;
        }
        .bg-dark {
          padding: 3em 1em;
        }
        .orderx {
          order: 1;
        }
        .pd {
          padding: 0em 1em;
        }
        .text-right {
          text-align: center !important;
        }
        .text-white {
          text-align: center !important;
        }
        .text-left {
          text-align: center !important;
        }
        .text-white1 {
          text-align: center !important;
        }
        .padr {
          padding: 0;
        }
        .padl {
          padding: 0;
        }
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
