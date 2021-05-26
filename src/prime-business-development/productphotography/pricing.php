<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'header.php';?>
  <!-- 
  //////////////////////////////////////////////////////////////////////////////
  // WEDDING STORY THEME v1.1 (2/15/17)
  // ADAPTED FROM WEDDING TO PERSONAL USE
  // Theme Created By Justin Hammond Web Design - www.justinpaulhammond.com/web
  // Created on the 3.0 Bootstrap framework - www.getbootstrap.com
  // Copyright (c) 2017 Justin Hammond Web Design
  //
  // DO NOT REMOVE THIS HEADER, DO NOT USE WITHOUT PERMISSION
  //////////////////////////////////////////////////////////////////////////////
  -->
  <title>Prime Product Photography</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pa-lib.com/pineapple/1.1.0/css/pineapple.min.css">
  <link rel="stylesheet" href="assets/css/waterfall.theme.css">
  <style>

/*
.pa-banner {
  background-image: url("assets/pics/code.jpg");
}
*/

/* Colors go from first, middle, to last in gradient order*/
.pa-banner {
  /*
  background-image: linear-gradient(141deg, #fff, #2d2a4d, #000000);
  background-image: -webkit-linear-gradient(141deg, #5c518d, #2d2a4d, #5c51d1);
  background-image: -o-linear-gradient(141deg, #89150a, #2d2a4d, #000000);
  */
  background-image: url("assets/pics/banner.jpg");
}


.carousel,
.carousel-item,
.active {
    height: initial;
}
.carousel-item {
    background-position: center;
}
.carousel-inner {
    height: initial;
}


.carousel-item:nth-child(2) {
    background-image: url("https://mdbootstrap.com/images/regular/nature/img%20(4).jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
.carousel-item:nth-child(3) {
    background-image: url("https://mdbootstrap.com/images/regular/nature/img%20(3).jpg");
    background-repeat: no-repeat;
    background-size: cover;
}



.bg-red {
  /*background-color:#2d2a4d;*/
  background-image: linear-gradient(141deg, #fff, #2d2a4d, #000000);
  background-image: -webkit-linear-gradient(180deg, #89150a, #d21e16, #89150a);
  background-image: -o-linear-gradient(141deg, #89150a, #2d2a4d, #000000);
  color: white;
}
img.justin-pic {
  max-width: 20vw;
  height: auto;
  border: solid 1px black;
  border-radius: 100%;
  margin-top: 30px;
}


.logo {
  width: 240px;
  height:60px;
  position: relative;
  float:left;
  padding: 10px;
}




.pa-live-thumbnail iframe {
  width: 1280px;
  height: 768px;
  opacity: 0;
  transition: all 300ms ease-in-out;
}
.pa-live-thumbnail {
  position: relative;
  -ms-zoom: 0.2;
  -moz-transform: scale(0.2);
  -moz-transform-origin: 0 0;
  -o-transform: scale(0.2);
  -o-transform-origin: 0 0;
  -webkit-transform: scale(0.2);
  -webkit-transform-origin: 0 0;
}
.pa-live-thumbnail-container {
  width: calc(1280px * 0.2);
  height: calc(768px * 0.2);
  display: inline-block;
  overflow: hidden;
  position: relative;
  border: solid 1px black;
  margin: -10px -20px; /*ONLY FOR THIS PROJECT, DO NOT INCLUDE IN PINEAPPLE */
}
.pa-live-thumbnail-container a {
  position:absolute; 
  top:0; 
  left:0; 
  right:0; 
  bottom:0;   
  width: 1440px;
  height: 900px; 
  z-index:10;
}
.pa-live-thumbnail-container:before {
  position: absolute;
  display: block;
  margin-left: auto;
  content: "Loading thumbnail...";
}
/*         <div class="pa-live-thumbnail-container">
          <div class="pa-live-thumbnail">
           <iframe src="https://primebusinessdevelopment.com" onload="this.style.opacity = 1"></iframe>
              <a href="https://primebusinessdevelopment.com"></a>
          </div>
        </div>
*/


.progress-bar {
  background-color:#89150a;
}


.thumbnail-pic {
  border: solid 1px black;
  max-width: 100%;
  height:auto;
}
.site-link {
  color:#89150a;
}
.site-link:hover {
  text-decoration: none;
  color:#89150a;
}


.pricing-card {
  border: solid 1px #89150a;
  padding: initial;
  border-radius: initial;
}
.pricing-title {
  background-color: #89150a;
  color:#fff;
  padding:10px;
}


  </style>
</head>
<body id="home" data-spy="scroll" data-target=".navbar" data-offset="70">


<!-- NAVBAR -->
<?php include 'nav.php';?>













<!-- PRICING -->
<div id="how-it-works" class="container">
<br><br><br>
  <h2>PRICING</h2>
  <br>

  <p>The price of each photo is determined by the base price, plus upgrades. The more photos you order at a time, the lower the cost per photo.</p>



<div class="row">
    <div class="col-md-4 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">1 Photo</p>

<p>$18/photo</p>
    </div>

</div>


    <div class="col-md-4 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">2-9 Photos</p>

<p>$12/photo</p>
    </div>

</div>


    <div class="col-md-4 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">10-19 Photos</p>

<p>$10/photo</p>
    </div>

</div>

</div>


<div class="row">

    <div class="col-md-4 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">21-34 Photos</p>

<p>$9/photo</p>
    </div>

</div>


    <div class="col-md-4 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">35-50 Photos</p>

<p>$8/photo</p>
    </div>

</div>


    <div class="col-md-4 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">51+ Photos</p>

<p>$7/photo</p>
    </div>

</div>




</div>
<br><br>
<div class="text-center">
        <a href="https://squareup.com/store/primebusinessdevelopment"><button class="btn btn-default btn-lg btn-other" style="background-color: #89150a;color: #fff;">START YOUR ORDER</button></a>
</div>
</div>





<!-- UPGRADES -->
<div id="upgrades" class="pa-bg-gray" style="width: 100%;">
<div class="container">
  <h2>UPGRADES</h2>
  <br>

  <h3>Specialty Photos</h3>
  <p>Certain products take a little extra effort, but we make it very affordable.</p>



<div class="row">
    <div class="col-md-4 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">Oversized</p>

<p>+$5/photo</p>
    </div>

</div>


    <div class="col-md-4 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">Hand Model</p>

<p>+$5/photo</p>
    </div>

</div>


    <div class="col-md-4 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">Clothing</p>

<p>+$5/photo</p>
    </div>

</div>


</div>


<div class="row">


    <div class="col-md-4 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">Jewelry</p>

<p>+$5/photo</p>
    </div>

</div>


    <div class="col-md-4 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">Watches</p>

<p>+$5/photo</p>
    </div>

</div>


    <div class="col-md-4 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">Lifestyle</p>

<p>+$5/photo</p>
    </div>

</div>



</div>
<br><hr><br>

<h3>Group Photos</h3>
<p>How many items will be in the photograph?</p>


<div class="row">
    <div class="col-md-3 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">1-2 Items</p>

<p>No Additional Charge</p>
    </div>

</div>


    <div class="col-md-3 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">4-6 Items</p>

<p>+$5/photo</p>
    </div>

</div>


    <div class="col-md-3 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">7-12 Items</p>

<p>+$10/photo</p>
    </div>

</div>


    <div class="col-md-3 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">13+ Items</p>

<p>+$15/photo</p>
    </div>

</div>


</div>

<br><hr><br>

<h3>Turn Around Time</h3>
<p>How soon do you want your pictures?</p>

<p>7 Business Days</p>
<p>3 Business Days</p>
<p>24 Hour Rush</p>


<br><br>
<div class="text-center">
        <a href="https://squareup.com/store/primebusinessdevelopment"><button class="btn btn-default btn-lg btn-other" style="background-color: #89150a;color: #fff;">START YOUR ORDER</button></a>
</div>

</div>
</div>
</div>



<!-- IMAGE FORMATES -->
<div id="image-formats" class="container">

  <h2>IMAGE FORMATES</h2>
  <br>

  <p>All orders include a high resolution JPEG and Photoshop file with layeres and clipping mask.</p>



<div class="row">
    <div class="col-md-3 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">High Resolution Amazon Ready JPEG</p>

<p>Included</p>
    </div>

</div>


    <div class="col-md-3 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">Layered Photoshop File</p>

<p>Included upon request</p>
    </div>

</div>


    <div class="col-md-3 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">Transparent PNG</p>

<p>Included upon request</p>
    </div>

</div>


    <div class="col-md-3 text-center">

<div class="pa-card pricing-card">
<p class="pricing-title">Layered TIFF</p>

<p>Included upon request</p>
    </div>

</div>

</div>




</div>

<div class="text-center">

        <a href="https://squareup.com/store/primebusinessdevelopment"><button class="btn btn-default btn-lg btn-other" style="background-color: #89150a;color: #fff;">START YOUR ORDER</button></a>
</div>
<br><br>
</div>




<?php include 'footer.php';?>



</body>
</html>