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
  <title>Prime Web Design</title>
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
  background-image: url('assets/pics/code.jpg');
}

.bg-red {
  /*background-color:#2d2a4d;*/
  background-image: linear-gradient(141deg, #fff, #2d2a4d, #000000);
  background-image: -webkit-linear-gradient(180deg, #89150a, #d21e16, #89150a);
  background-image: -o-linear-gradient(141deg, #89150a, #2d2a4d, #000000);
  color: white;
}

.logo {
  width: 230px;
  height:65px;
  position: relative;
  float:left;
  padding: 10px;
}

.thumbnail {
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

<!-- NAVBAR -->
<nav class="navbar navbar-inverse navbar-toggleable-lg fixed-top">
  <!--<div class="container">-->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation" style="position: absolute;top: 50%;transform: translateY(-50%);">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a class="navbar-brand" href="../index.php"><!--<h1 class="navbar-brand" style="letter-spacing: 4px;font-size: 3vmin;">Prime Web Design</h1>--><img src="assets/pics/webdesign_logo.png" class="logo" alt="Logo"></a> 
    <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
      <ul class="navbar-nav">
        <li class="nav-item" style="padding-right: 30px;"><a class="nav-link" href="tel:NA">FREE QUOTE: NA</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#home">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="webdesign.php">DESIGN PROCESS</a></li>
        <!--<li class="nav-item"><a class="nav-link" href="contracts.php">CONTRACTS</a></li>
        <li class="nav-item"><a class="nav-link" href="#pricing">PRICING</a></li>-->
        <li class="nav-item"><a class="nav-link" href="#portfolio">PORTFOLIO</a></li>
        <li class="nav-item"><a class="nav-link" href="#get-started">GET STARTED</a></li>
      </ul>
    </div>
  <!--</div>-->
</nav>


<div class="pa-banner pa-banner-darken">
  <div class="pa-banner-text">
  <br><br>
    <h1 style="font-size: 60px">Affordable, Custom Websites</h1>
    <br>
    <h3 style="color:#fff;">Modern. Sleek. Simple.</h3>
    <br>
        <a href="#get-started"><button class="btn btn-default btn-lg btn-banner">Get Started</button></a>


</div>
</div>





<div class="container-fluid">

<h2>Fully Responsive</h2>
<br>

<div class="row pa-slideanim">

<div class="col-sm-6 text-center">
<p>We design our sites with every user in mind. All of our sites are built with a mobile-first approach meaning that we design for all screen sizes. We've tested our sites on devices as small as an iPhone 5 to a 60" TV!</p>
</div>

<div class="col-sm-6 text-center">
<img src="assets/pics/responsive.png" style="max-width: 100%;">
</div>



</div>
</div>


<div class="container-fluid pa-bg-gray">

<h2 class="text-center">Incredible Performance</h2>
<br>

<div class="row text-center">
<div class="col-md-5 pa-slideanim">
<img src="assets/pics/servers.png" style="max-width: 80%;height: auto;">
</div>

<div class="col-md-7 pa-slideanim text-left">
<h3>Hosting</h3>
<p>We run our server in-house so we can give you attention to detail. We'll take care of all your sites maintenance so you can focus on your business.</p>
<hr>
<h3>Speed</h3>
<p>All of our sites run on their own dedicated <a href="https://en.wikipedia.org/wiki/Content_delivery_network" target="_blank">CDN</a> so that your site loads instantaneously. Our server is loaded with hardware more than capable of handling any influx of traffic.</p>
<hr><br>
</div>


<div class="col-md-8 pa-slideanim text-left">
<h3>Uptime</h3>
<p>For years we've accomplished an incredible 99% uptime. Your site will always be accesible, rain or shine.</p>
<hr>
<h3>Security</h3>
<p>We are dedicated to your companies and customers security. All of our websites come with their own SSL certificate - free of charge. This allows traffic to be encrypted end to end so that your data is kept safe.</p>
</div>

<div class="col-md-4 pa-slideanim">
<img src="assets/pics/99up.png" style="max-width: 200px;max-height: 200px;">

<img src="assets/pics/ssl.png" style="max-width: 100%;height: auto;">
</div>



</div>
</div>
</div>


<div class="container-fluid">

<h2 class="text-center">Cutting Edge Technology</h2>
<br>

<div class="row text-center">
<div class="col-sm-4 pa-slideanim">
<p style="font-size: 28px">We use the latest web technologies to bring you incredible websites. </p>
</div>

<div class="col-sm-4 pa-slideanim">
<img src="assets/pics/language_brands.png" style="max-width: 100%;height: auto;">
</div>

<div class="col-sm-4 pa-slideanim">
<p style="font-size: 28px">We've created images, databases, login systems, shopping platforms, client/employee backends and more.</p>
</div>

</div>
</div>
</div>





<!-- Portfolio -->
<div id="portfolio" class="container-fluid text-center pa-bg-gray">
    <h2>Portfolio</h2>
    <br>
    <div class="row text-center pa-slideanim">
        <div class="col-lg-4">
            <a href="https://primebusinessdevelopment.com">
                <div class="pa-card">
                    <div class="thumbnail">
                        <img src="assets/pics/pbd.jpg">
                    </div>
                    <br>
                    <h3>Prime Business Development</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="https://foodforeverfoundation.org">
                <div class="pa-card">
                    <div class="thumbnail">
                        <img src="assets/pics/fff.jpg">
                    </div>
                    <br>
                    <h3>Food Forever Foundation</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="https://tuneuptechnology.com">
                <div class="pa-card">
                    <div class="thumbnail">
                        <img src="assets/pics/tt.jpg">
                    </div>
                    <br>
                    <h3>Tuneup Technology</h3>
                </div>
            </a>
        </div>
    </div>

    <br>

    <div class="row text-center pa-slideanim">
        <div class="col-lg-4">
            <a href="https://fidgetmotion.com">
                <div class="pa-card">
                    <div class="thumbnail">
                        <img src="assets/pics/fm.jpg">
                    </div>
                    <br>
                    <h3>Fidget Motion</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="https://lostcreekoutdoor.come">
                <div class="pa-card">
                    <div class="thumbnail">
                        <img src="assets/pics/lc.jpg">
                    </div>
                    <br>
                    <h3>Lost Creek</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="http://pa-lib.com">
                <div class="pa-card">
                    <div class="thumbnail">
                        <img src="assets/pics/pa.jpg">
                    </div>
                    <br>
                    <h3>Pineapple Library</h3>
                </div>
            </a>
        </div>
    </div>

    <br>

    <div class="row text-center pa-slideanim">
        <div class="col-lg-4">
            <a href="https://flintenterprises.com">
                <div class="pa-card">
                    <div class="thumbnail">
                        <img src="assets/pics/fe.jpg">
                    </div>
                    <br>
                    <h3>Flint Enterprises</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="#">
                <div class="pa-card">
                    <div class="thumbnail">
                        <img src="assets/pics/coming_soon.jpg">
                    </div>
                    <br>
                    <h3>Mr Wipes</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="#">
                <div class="pa-card">
                    <div class="thumbnail">
                        <img src="assets/pics/coming_soon.jpg">
                    </div>
                    <br>
                    <h3>Sego Lily Soap</h3>
                </div>
            </a>
        </div>
    </div>

    <br><hr>
    <h3>Other Websites</h3>
    <ul class="text-left">
        <li><a href="#">G4 Motion</a></li>
        <li><a href="#">Insight Tennis</a></li>
        <li><a href="#">Fixin's Contracting</a></li>
    </ul>

</div>



<div id="get-started" class="container text-center bg-grey">
<br>
<h2>Get Started!</h2>
  <br>
<p class="">Call us to get a FREE quote for your business site. Let's see what we can build together.</p>
<hr>
  <a href="tel:NA" style="font-size: 3vmin">NA</a>
  <br>
  <a href="mailto:NA" style="font-size: 3vmin">NA</a>
  <br><br>
</div>


<footer class="container-fluid text-center pa-bg-gray" style="color:#818181 !important;">
  <div class="col-sm-12">
  <a href="#home" title="To Top">
    <span class="fa fa-chevron-up fa-md" aria-hidden="true" style="color:#818181 !important;"></span>
  </a>
    <p class="text-center" style="padding-top: 15px;">&#169; Prime Web Design, All rights reserved.</p>
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
