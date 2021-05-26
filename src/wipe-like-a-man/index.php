<!DOCTYPE html>
<html lang="en">
<head>
  <!-- 
  //////////////////////////////////////////////////////////////////////////////
  // WATERFALL THEME v1.0
  // Theme Ported from Pineapple 1.0.0 - www.pa-lib.com
  // Created on the 4.0 Bootstrap framework - www.getbootstrap.com
  // (c) 2017, Justin Hammond Web Design - www.justinpaulhammond.com/web
  // Code licensed under Creative Commons by 3.0. - www.creativecommons.org/licenses/by/3.0/
  //
  // DO NOT REMOVE THIS HEADER, PERMISSION FOR PUBLIC USE GRANTED
  //////////////////////////////////////////////////////////////////////////////
  -->
  <title>Mr Wipes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/pics/favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/pineapple.css">
  <link rel="stylesheet" href="waterfall.theme.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  
  <style>

/* BANNER */
.pa-banner {
    background-image: url("assets/pics/MrWipes3.jpg");
}
.banner-2 {
    background-image: url("assets/pics/logo_office2.png");
}
.banner-lifestyle {
    background-image: url("assets/pics/spinner-lifestyle.jpg");
    background-repeat: no-repeat;
}
.pa-banner-heading {
    text-shadow: 0 0 20px black;
}
.pa-banner-sub-heading {
    text-shadow: 0 0 10px black;
}
.contact-pic {
    max-width:100%;
    padding-bottom: 20px;
}
.logo-banner {
    width: 20%;
    height: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
/* For width 1024 and larger: */
@media only screen and (max-width: 1024px) {
    .logo-banner { 
      width: 30%;
      height: auto;
    }
}
#spinner {
  -webkit-animation: spin 2.5s linear infinite;
  animation: spin 2.5s linear infinite;
  margin-top: 10px;
}
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

  </style>

</head>
<body id="home" data-spy="scroll" data-target=".navbar" data-offset="70">

<!-- NAVBAR -->
<nav class="navbar navbar-inverse navbar-toggleable-lg fixed-top">
  <!--<div class="container">-->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a class="navbar-brand" href="#home"><h1 class="navbar-brand">MR WIPES</h1><img src="assets/pics/logo.png" class="logo" alt="Logo" style="width:60px;"></a> 
    <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#products">PRODUCTS</a></li>
        <li class="nav-item"><a class="nav-link" href="https://www.amazon.com">PURCHASE</a></li>
        <li class="nav-item"><a class="nav-link" href="#about-us">ABOUT US</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact-us">CONTACT US</a></li>
      </ul>
    </div>
  <!--</div>-->
</nav>


<!-- BANNER -->
<div class="pa-banner pa-banner-darken">
  <div class="pa-banner-text">
    <br>
    <!--<img src="assets/pics/spinner-white.png" class="pa-banner-logo" id="spinner" alt="Fidget Motion">-->
    <br>
    <h2 class="pa-banner-heading" style="letter-spacing: 6px;font-size: 9vmin;">Wipe Like A Man<br>Smell Like A Gent</h2>
    <br>
    <a href="https://www.amazon.com"><button class="btn btn-lg btn-banner" style="margin-top: 20px;">Purchase</button></a>
  </div>
</div>



<!--
<div class="container-fluid pa-bg-gray">
<div class="container pa-card pa-slideanim">
<h2 style="margin:0px;">Spinner in Action</h2>



<div class="pa-videoWrapper">


<iframe src="https://www.youtube.com/embed/itMcaoOFUe8?rel=0" allowfullscreen style="border: none;margin: 60px 0px;"></iframe>


</div>
<br><br>
</div>
</div>
-->




<!-- Container (PRODUCTS Section) -->
<div id="products"></div>
<div class="container-fluid pa-bg-gray">
  <h2>Products</h2><br>
  <div class="row">
    <div class="col-sm-6 pa-slideanim">
      <h3>Mr Wipes</h3>
      <p class="text-left">Mr. Wipes are flushable, 100% biodegradable male hygiene wipes.</p>
      <p>They are used for cleaning after the bathroom, after a trip to the gym, a meal, or for anything else.</p>
      <p>They are equipped with soothing Aloe Vera, hypoallergenic, and leaves nothing but a refreshing manly scent.</p>
      <p>Mr. Wipes comes in pouches that you can keep in your home, or in single disposables you can take anywhere.</p>

      <p>Our Mission is to keep you feeling confident and clean for anything that will come your way.</p>
      <p>You are a gentleman, be gentle down there.</p>
      <p>Mr. Wipes wants you to stay on top of your A game.</p>
      <p>Being absolutely clean down there is essential to feeling confident.</p>
      <p>Never get in a messy situation, keep Mr. Wipes close by, and rest easy.</p>

      <a href="https://www.amazon.com"><button class="btn btn-lg btn-other" style="margin-top: 20px;">Purchase</button></a>
      <br>
    </div>
    <div class="col-sm-6 pa-slideanim" style="display: block;text-align: center;">
      <img src="assets/pics/MrWipes2.jpg" style="max-width: 100%;border-radius: 0.5em;">
      <br><br><br>
            <img src="assets/pics/MrWipes4.jpg" style="max-width: 100%;border-radius: 0.5em;">
    </div>

  </div>
</div>



<!-- Container (ABOUT US Section) -->
<!--
<div id="about-us"></div>
<div class="container-fluid">
  <h2>About Us</h2><br>
    <h3 class="text-center">Meet the Team</h3>
    <br>
  <div class="row">
    <div class="col-sm-4">
      <div class="pa-card">
        <img src="assets/pics/brody.jpg" style="max-width:100%;padding-bottom: 20px;">
        <h4>Brody</h4>
        <p>Info here</h4>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="pa-card">
        <img src="assets/pics/quentin.jpg" style="max-width:100%;padding-bottom: 20px;">
        <h4>Quentin</h4>
        <p>Info here</h4>
      </div>   
    </div>
    <div class="col-sm-4">
      <div class="pa-card">
        <img src="assets/pics/tyler.jpg" class="contact-pic">
        <h4>Tyler</h4>
        <p>Info here</h4>
      </div>
    </div>
  </div>
</div>
-->




<!-- Container (WHY US Section) -->
<div id="about-us" class="container-fluid text-center pa-slideanim">
  <h2>About Us</h2><br>
    <p>In 2012, Mr. Wipes founder Joel Zae realized that his roommate in college used baby wipes instead of toilet paper in the bathroom. At first Joel thought it was very weird, thinking wipes were just for babies. However one day after finally trying one, Joel never went back. Still, these baby wipes were far from what Joel really needed.</p>
    <br>
    <p>In 2013 Joel created a bigger, flushable, more manly wipe that would change the way men wiped forever. Joel wanted to share his innovation with his fellow gents, and thus Mr. Wipes was founded.</p>
</div>



<!-- BANNER 2 -->
<!-- pa-banner-darken isn't working on the second banner... -->
<!--
<div class="pa-banner banner-2 banner">
  <div class="pa-banner-text">
    <form action="db-newsletter.php" method="post">
      <h4 class="pa-banner-heading">Join Our Newsletter</h4>
      <p class="pa-banner-sub-heading">Sign up to receive news and updates about our latest products and offers.</p>
      <input type="email" name="email" placeholder="Email Address" class="form-control form-newsletter">
      <br>
      <input type="submit" name="newsletter" value="Signup" class="btn btn-lg btn-banner" style="height: 50px;">
    </form>
  </div>
</div>
-->



<!-- Container (CONTACT US Section) -->
<div id="contact-us"></div>
<div class="container-fluid pa-bg-gray">
  <h2>Contact Us</h2><br>


      <div class="pa-slideanim">
          <div class="pa-card" style="margin-top: 0px;">
          <label>Have a question? Special order?<br>Contact us!</label>
          <br><br>
          <p>Phone:<br>NA</p>
          <p>Email:<br><span style="font-size: 3.5vmin">NA</span></p>
        </div>
      </div>
</div>



<footer class="container-fluid text-center">
  <a href="#home" title="To Top">
    <span class="fa fa-chevron-up fa-lg" aria-hidden="true"></span>
  </a>
  <div style="padding-top: 30px;letter-spacing:1.5px;">
    <p>&#169; <?php echo date("Y");?> Mr Wipes, All rights reserved.</p>
    <p>Design: <a href="https://justinpaulhammond.com/web">Justin Hammond Web Design</a></p>
  </div>
</footer>


<!-- SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="assets/js/pineapple.js"></script>
<script src="https://use.fontawesome.com/12e4399d79.js"></script>



</body>
</html>
