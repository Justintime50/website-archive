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


  </style>
</head>
<body id="home" data-spy="scroll" data-target=".navbar" data-offset="70">


<?php include 'nav.php';?>













<!-- HOW IT WORKS -->
<div id="how-it-works" class="container">
<br><br><br>
  <h2>HOW IT WORKS</h2>
  <br><br>

  <div class="row">
    <div class="col-md-3 text-center">
          <i class="fa fa-phone fa-4x" aria-hidden="true"></i>

          </div>

          <div class="col-md-9">
            <h3 class="text-left">Step 1) Place Your Order</h3>
            <br>
            <b>Option A: Give Us A Call</b>
            <p>Some things are easier explained over the phone. We know your branding is important to you, and we want to make sure we do it right.</p>
            <b>Option B: Order Online</b>
            <p>We make it easy by providing a variety of options to match your needs.</p>

    </div>

</div>
            <hr><br>


  <div class="row">
    <div class="col-md-3 text-center">
          <i class="fa fa-photo fa-4x" aria-hidden="true"></i>

          </div>

          <div class="col-md-9">
            <h3 class="text-left">Step 2) Send Us Photo Examples (optional)</h3>
            <br>
            <b>Take a Cell Phone Picture</b>
            <p>Take a cell phone picture of each product, with the desired camera angle and item position. Once you’ve place your order over the phone or online, you will receive a confirmation email. Fill out the  Photo Style Guide spreadsheet, and insert the photos into the spreadsheet. Then send a reply email with the spreadsheet attached.</p>

            <b>Send Us a URL</b>
            <p>Instead of inserting a cell phone picture into the Photo Style Guide spreadsheet, insert a URL to an existing image online that most closely matches the photo you like. Then send a reply email with the spreadsheet attached.</p>

            <b>Let us Take Care of It</b>
            <p>As Amazon experts, we understand the kind of pictures that result in the best conversion rates. If you’d rather not send us match examples, leave the picture-taking completely to us. Make sure to let us know when you order over the phone or when ordering online.</p>

    </div>

</div>
            <hr><br>

  <div class="row pa-slideanim">
    <div class="col-md-3 text-center">
          <i class="fa fa-truck fa-4x" aria-hidden="true"></i>

          </div>

          <div class="col-md-9">
            <h3 class="text-left">Step 3) Send Us Your Products</h3>
            <br>
            <b>Shipping</b>
            <p>After you order your photos, you will receive a confirmation email with our address and instructions on how to ship your products.</p>

            <b>Let Us Order Your Product</b>
            <p>If you use a third party shipping service, such as Amazon Fulfillment, and you’d rather not pack up and ship the product yourself, let us order the product for you. We won’t charge you for the photo service until you’re satisfied. However, if we order your product, we ask you to cover the cost of the product before we get started on the photos.</p>

    </div>

</div>
            <hr><br>


  <div class="row pa-slideanim">
    <div class="col-md-3 text-center">
          <i class="fa fa-camera fa-4x" aria-hidden="true"></i>

          </div>

          <div class="col-md-9">
            <h3 class="text-left">Step 4) We Photograph Your Products</h3>
            <br>
            <p>Your products will be photographed and edited by our media specialist.</p>

    </div>

</div>
            <hr><br>


  <div class="row pa-slideanim">
    <div class="col-md-3 text-center">
          <i class="fa fa-check fa-4x" aria-hidden="true"></i>

          </div>

          <div class="col-md-9">
            <h3 class="text-left">Step 5) Review and Approve your Photos</h3>
            <br>
            <p>Once we’ve completed your photos we will send them to you for review. After you have approved and paid the invoice online, we will send you a download link to the photos. This will include a high resolution Jpeg and a PSD file with layers and clipping mask.</p>

    </div>

</div>
            <hr><br>


  <div class="row pa-slideanim">
    <div class="col-md-3 text-center">
          <i class="fa fa-truck fa-4x" aria-hidden="true"></i>

          </div>

          <div class="col-md-9">
            <h3 class="text-left">Step 6) We Return Your Product (optional)</h3>
            <br>
            <p>If you’d like your product back, we ask you to cover return shipping. Many customers rather not deal with it, in which case, we’d be happy to keep your product. Thank you!</p>

    </div>

</div>
            <hr>

</div>



<div class="text-center">

        <a href="pricing.php"><button class="btn btn-default btn-lg btn-other" style="background-color: #89150a;color: #fff;">PRICING</button></a>
</div>

<br><br>






<?php include 'footer.php';?>



</body>
</html>