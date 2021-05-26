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
  <link rel="stylesheet" href="assets/css/pineapple.css">
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
  background-position: right;
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


.banner-text-mobile {
  color: #444;
}

@media screen and (max-width: 900px) {
  .banner-text-mobile {
    color: #fff;

  }
}


.red-checkmarks {
  color: #89150a;
  font-size: 30px;
}


  </style>
</head>
<body id="home" data-spy="scroll" data-target=".navbar" data-offset="70">


<?php include 'nav.php';?>


<div class="pa-banner pa-banner-darken">
  <div class="pa-banner-text text-left banner-text-mobile">

    <h1 style="font-size: 6.5vmin;font-weight: bold;">Your Amazon Photographer</h1>
    <p style="font-size: 2.5vmin;">Product photography that captivates your audience.</p>
    <br>
    <a href="how-it-works.php"><button class="btn btn-default btn-lg btn-other" style="background-color: #89150a;color: #fff;">TRY US FOR FREE</button></a>


</div>
</div>







<!-- Portfolio -->


<div class="container-fluid pa-bg-gray">
<h2>Portfolio</h2>
<?php include 'slider.html';?>
</div>

<!--
<div style="display: flex; justify-content: center;">
<div class="pa-card">

<div id="portfolioCarousel" class="carousel slide" data-ride="carousel" data-interval="2000" data-pause="false">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner" role="listbox" style="width: 500px;height: 500px;max-width: 100%;">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="assets/pics/barnwood.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="assets/pics/blades.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="assets/pics/red_spinner.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="assets/pics/BlackFrame.jpg" alt="Fourth slide">
    </div>    
    <div class="carousel-item">
      <img class="d-block img-fluid" src="assets/pics/Beach.jpg" alt="Fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="assets/pics/floating.jpg" alt="Fifth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

</div>

</div>

-->






<!-- HOW IT WORKS -->
<div id="portfolio" class="container text-center">
  <h2>HOW IT WORKS</h2>
  <br>

  <div class="row text-center pa-slideanim" style="font-size: 1.2rem;">
    <div class="col-md-4">
          <i class="fa fa-phone fa-3x" aria-hidden="true" style="padding-bottom: 10px;"></i>
          <p>1) GIVE US A CALL
          <br>
          <a href="pricing.php">Or place your order online.</a></p>
    </div>
    <div class="col-md-4">
          <i class="fa fa-photo fa-3x" aria-hidden="true" style="padding-bottom: 10px;"></i>
          <p>2) SEND US EXAMPLE PICTURES
          <br>
          Or let our experienced photographers decide.</p>
    </div>
    <div class="col-md-4">
          <i class="fa fa-shopping-cart fa-3x" aria-hidden="true" style="padding-bottom: 10px;"></i>
          <p>3) WE'LL ORDER YOUR PRODUCTS
          <br>
          (so you don't have to send them).<br>Or send them yourself. <a href="how-it-works.php">See Details.</a></p>
    </div>
  </div>

  <br>

  <div class="row text-center pa-slideanim" style="font-size: 1.2rem;">
    <div class="col-md-4">
          <i class="fa fa-camera fa-3x" aria-hidden="true" style="padding-bottom: 10px;"></i>
          <p>4) WE PHOTOGRAPH YOUR PRODUCTS
          <br>
          <a href="pricing.php">Or place your order online.</a></p>
    </div>
    <div class="col-md-4">
          <i class="fa fa-check fa-3x" aria-hidden="true" style="padding-bottom: 10px;"></i>
          <p>2) REVIEW &#38; APPROVE YOUR PHOTOS
          <br>
          Or let our experienced photographers decide.</p>
    </div>
    <div class="col-md-4">
          <i class="fa fa-truck fa-3x" aria-hidden="true" style="padding-bottom: 10px;"></i>
          <p>3) WE RETURN YOUR PRODUCTS
          <br>
          (OPTIONAL)</p>
    </div>
  </div>


  <br>

          <a href="how-it-works.php"><button class="btn btn-default btn-lg btn-other" style="background-color: #89150a;color: #fff;">LEARN MORE</button></a>

</div>



<div class="pa-bg-gray" style="width: 100%;">
<div class="container">

<h2>WHAT'S INCLUDED</h2>
<br>

<div class="row">
<div class="col-sm-6">
          <p><i class="fa fa-check red-checkmarks" aria-hidden="true"></i> Don’t pay us until you approve of the photos</p>           <p><i class="fa fa-check red-checkmarks" aria-hidden="true"></i> High resolution Amazon ready images</p>
          <p><i class="fa fa-check red-checkmarks" aria-hidden="true"></i> Meets all Amazon image requirements</p>
          <p><i class="fa fa-check red-checkmarks" aria-hidden="true"></i> Photoshop file with layers and clipping mask</p>
</div>

<br>

<div class="col-sm-6">
          <p><i class="fa fa-check red-checkmarks" aria-hidden="true"></i> 7 business day turnaround</p>
          <p><i class="fa fa-check red-checkmarks" aria-hidden="true"></i> Download your photos online when they’re ready</p>
          <p><i class="fa fa-check red-checkmarks" aria-hidden="true"></i> Use the photos forever without restrictions</p>
</div>
</div>

<br>

<div class="text-center">

        <a href="pricing.php"><button class="btn btn-default btn-lg btn-other" style="background-color: #89150a;color: #fff;">TRY US FOR FREE</button></a>
</div>


</div>
</div>



<div class="container">

<h2>READ WHAT OUR CUSTOMERS THINK</h2>
<br>

<div class="row">
<div class="col-sm-6">
<p>“Prime has done an awesome job of coordinating which pictures need updating in order to optimize our listings. They have taken high quality pictures of those products, and updated them without me having to do anything.  We have seen an increase in our conversions simply from better quality photos. I would highly recommend using them to update any product photos, they do a terrific job.”</p>
<p>- John (President of Barnwood Frames)</p>
</div>


<div class="col-sm-6">
  <p>"Working with Prime Business Development has been totally painless. They took care of everything and delivered a quality result. The pictures looked great!"</p>
  <p>"The pictures turned out wonderfully.  I'm very happy with the results. Prime Business Development has been one step ahead. They are responsive and easy to work with."</p>
  <p>- Darrell (Owner of Lost Creek)</p>
</div>


<!--
<div class="col-sm-4">

</div>
-->
</div>


<br>

<div class="text-center">

        <a href="pricing.php"><button class="btn btn-default btn-lg btn-other" style="background-color: #89150a;color: #fff;">TRY US FOR FREE</button></a>
</div>



</div>









<!-- Contact -->
<!--
<div id="contact" class="container-fluid text-center bg-grey">
<h2>Team</h2>
  <br>
  <div class="row">
  <div class="col-sm-3">
      <img src="assets/pics/bw_justin.png" class="justin-pic">
</div>

<div class="col-sm-9 text-left">
    <h3>My Background</h3>
    <p style="font-size:16px;">I've designed websites for eight years. I taught myself to code at the age of 14. I have a diverse portfolio of websites I've created for different organizations and needs. Let's see what we can build together.</p>
    <hr>
    <h3>My Approach</h3>
    <p style="font-size:16px;">Modern&nbsp;&nbsp;|&nbsp;&nbsp;Sleek&nbsp;&nbsp;|&nbsp;&nbsp;Simple</p>
  <br>
  <p>NA</p>
  <p>NA</p>
  <br>
</div>
</div>
</div>
-->




<?php include 'footer.php';?>


</body>
</html>
