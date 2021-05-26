<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fidget Motion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/pics/favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pa-lib.com/pineapple/1.1.0/css/pineapple.min.css"></link>
  <link rel="stylesheet" href="assets/css/waterfall.theme.css">
  <meta name="Author" content="Fidget Motion">
  <meta name="keywords" content="fidget,motion,spinner,spinners,toys,student,home,focus,improve,ability,thinking,two,minutes,product">
  <meta name="description" content="Our unique fidget spinner is for one and all. Designed to help increase the focus of the user and improve thinking ability.">
  
  <style>

/* BANNER */
.pa-banner {
    background-image: url("assets/pics/banner3.jpg");
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


<!-- NAVBAR -->
<nav class="navbar navbar-inverse navbar-toggleable-lg fixed-top">
  <!--<div class="container">-->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a class="navbar-brand" href="#home"><h1 class="navbar-brand">FIDGET MOTION</h1><img src="assets/pics/logo.png" class="logo" alt="Logo"></a> 
    <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#products">PRODUCTS</a></li>
        <li class="nav-item"><a class="nav-link" href="https://www.amazon.com/dp/B06XR9RBWQ">PURCHASE</a></li>
        <li class="nav-item"><a class="nav-link" href="#why-us">WHY US</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact-us">CONTACT US</a></li>
      </ul>
    </div>
  <!--</div>-->
</nav>
<br><br><br><br><br>

<h1 class="text-center">PAGE NOT FOUND</h1>

<br>

<p class="text-center">Please navigate back to the <a href="index.php">home page</a>.

<br><br><br><br>

<!-- FOOTER -->
<footer class="container-fluid text-center">
  <a href="#home" title="To Top">
    <span class="fa fa-chevron-up fa-lg" aria-hidden="true"></span>
  </a>
  <div class="row" style="padding-top: 30px;letter-spacing:1.5px;">
  <div class="col-sm-4 text-left">
    <p>&#169; Fidget Motion, All rights reserved.
    <br>
    Design: <a href="https://primebusinessdevelopment.com/webdesign">Prime Web Design</a></p>
  </div>
  <div class="col-sm-4">
    <img src="assets/pics/logo_small_bw.png" width="120px" height="120px" alt="Fidget Motion">
    <h4>FIDGET MOTION</h4>
    </div>
      <div class="col-sm-4 text-right">
  <p>
    <a href="#products">Products</a>
    <!--<br><a href="#about-us">About Us</a>-->
    <br><a href="#contact-us">Contact Us</a>
    <br><a href="#contact-us" onclick="wholesaleMessage()">Wholesale</a>
    <br><a href="#contact-us" onclick="returnPolicy()">Return Policy</a>
    <br><!-- fixes shipping padding -->
  </p>

  </div>
  </div>
</footer>

</body>
</html>