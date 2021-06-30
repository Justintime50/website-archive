<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fidget Motion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/pics/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/pineapple.css">
    <link rel="stylesheet" href="assets/css/waterfall.theme.css"> -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pineapple-library@2.0.3/pineapple/dist/css/pineapple.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pineapple-library@2.0.3/templates/waterfall/assets/css/waterfall.min.css">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <meta name="Author" content="Fidget Motion">
    <meta name="keywords"
        content="fidget,motion,spinner,spinners,toys,student,home,focus,improve,ability,thinking,two,minutes,product">
    <meta name="description"
        content="Our unique fidget spinner is for one and all. Designed to help increase the focus of the user and improve thinking ability.">
</head>


<body id="home" data-spy="scroll" data-target=".navbar" data-offset="70">
    <nav class="navbar navbar-inverse navbar-toggleable-lg fixed-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#myNavbar"
            aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#home">
            <h1 class="navbar-brand">FIDGET MOTION</h1>
            <img src="assets/pics/logo.png" class="logo" alt="Logo" title="Fidget Motion">
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#products">PRODUCTS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">PURCHASE</a></li>
                <li class="nav-item"><a class="nav-link" href="#why-us">WHY US</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact-us">CONTACT US</a></li>
            </ul>
        </div>
    </nav>

    <div class="pa-banner banner-lifestyle pa-banner-darken">
        <div class="pa-banner-text">
            <br>
            <br>
            <h2 class="pa-banner-heading" style="letter-spacing: 5px;font-size: 9.5vmin;">Products in Motion</h2>
            <h3 style="color: #fff;">Fidget Toys</h3>
            <br>
            <a href="#"><button class="btn btn-lg pa-btn-banner" style="margin-top: 20px;">Purchase</button></a>
        </div>
    </div>

    <div class="container-fluid pa-bg-gray">
        <div class="container pa-card pa-slideanim">
            <h2 style="margin:0px;">Spinner in Action</h2>

            <div class="pa-video-container">
                <iframe src="https://www.youtube.com/embed/itMcaoOFUe8?rel=0" allowfullscreen style="border: none;margin: 60px 0px;"></iframe>
            </div>

            <br><br>
        </div>
    </div>

    <div class="container-fluid" style="margin-bottom:-20px;">
        <div class="row">
            <div class="col-sm-3 pa-slideanim">
                <p><i>“Results suggest that fidget toys were instrumental in refocusing the attention of students who
                        had previously succumbed to distractions to the learning process.”</i></p>
            </div>

            <div class="col-sm-6 pa-slideanim">
                <img src="assets/pics/spinner-white.png" class="pa-banner-logo" id="spinner" alt="Spinner">
                <br>
            </div>

            <div class="col-sm-3 pa-slideanim">
                <p>Quote produced from a <a href="http://digitalcommons.georgiasouthern.edu/ctls-expo/5/"
                        target="_blank">study</a> conducted by Georgia Southern University.</p>
            </div>
        </div>
    </div>

    <div id="products"></div>
    <div class="container-fluid pa-bg-gray">
        <h2>Products</h2><br>
        <div class="row">
            <div class="col-sm-6 pa-slideanim">
                <h3>The Fidget Motion Spinner</h3>
                <p class="text-left">Our unique spinner is for one and all. A student. A working professional. A stay at
                    home mom. A Five year-old. And even a fifty-five year-old. Our spinners are specially designed to
                    help increase the focus of the user and improve the users thinking ability. Made from child safe
                    plastic, a custom design, and high quality bearings our spinners will spin for at least two minutes
                    right out of the package.</p>
                <a href="#"><button class="btn btn-lg btn-other" style="margin-top: 20px;">Purchase</button></a>
                <br>
            </div>
            <div class="col-sm-6 pa-slideanim" style="display: block;text-align: center;">
                <img src="assets/pics/lifestyle-computer.jpg" style="max-width: 100%;border-radius: 0.5em;"
                    alt="lifestyle image">
            </div>
        </div>
    </div>

    <div id="why-us" class="container-fluid pa-slideanim">
        <h2>Why Us</h2><br>
        <p class="text-center">At Fidget Motion we have searched far and wide to bring to you the products that will
            better your life. We don’t settle for cheap knock-off versions of anything, instead we put quality and
            beauty as our number one priority. Our journey is just beginning and we would love your support as we try to
            help improve the world one product at a time. We will be coming out with new products sporadically
            throughout the year. Please keep up with us to stay in the know with our latest life changing product!</p>
    </div>

    <!-- TODO: pa-banner-darken isn't working on the second banner -->
    <div class="pa-banner banner-2 pa-banner-darken">
        <div class="pa-banner-text">
            <form action="#" method="post">
                <h4 class="pa-banner-heading">Join Our Newsletter</h4>
                <p class="pa-banner-sub-heading">Sign up to receive news and updates about our latest products and
                    offers.</p>
                <input type="email" name="email" placeholder="Email Address" class="form-control form-newsletter"
                    disabled>
                <br>
                <input type="submit" name="newsletter" value="Signup" class="btn btn-lg pa-btn-banner"
                    style="height: 50px;" disabled>
            </form>
        </div>
    </div>

    <div id="contact-us"></div>
    <div class="container-fluid">
        <h2>Contact Us</h2><br>
        <div class="row">
            <div class="col-sm-6 pa-slideanim">
                <img src="assets/pics/logo_office.png" style="max-width:100%;border-radius: 0.5rem;" alt="Logo"
                    title="Fidget Motion">
                <br><br>
            </div>
            <div class="col-sm-6 pa-slideanim">
                <div class="pa-card" style="margin-top: 0px;">
                    <p>Have a question? Special order?<br>Contact us!</p>
                    <br><br>
                    <p>Phone:<br>801-555-1234</p>
                    <p>Email:<br><span style="font-size: 2vmax">user@example.com</span></p>
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <a href="#home" title="To Top" class="pa-scroll">
            <span class="fa fa-chevron-up fa-lg" aria-hidden="true"></span>
        </a>
        <div class="row" style="padding-top: 30px;letter-spacing:1.5px;">
            <div class="col-sm-4 text-left">
                <p>&#169; Fidget Motion, All rights reserved.
                    <br>
                    Design: Justin Hammond
                </p>
            </div>
            <div class="col-sm-4">
                <img src="assets/pics/logo_small_bw.png" width="120px" height="120px" alt="Fidget Motion"
                    title="Fidget Motion">
                <h4>FIDGET MOTION</h4>
            </div>
            <div class="col-sm-4 text-right">
                <a href="#products">Products</a>
                <br><a href="#contact-us">Contact Us</a>
                <br><a href="#contact-us" onclick="wholesaleMessage()">Wholesale</a>
                <br><a href="#contact-us" onclick="returnPolicy()">Return Policy</a>
                <br><!-- fixes shipping padding -->
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
    <!-- <script src="assets/js/pineapple.js"></script>
    <script src="https://use.fontawesome.com/12e4399d79.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/pineapple-library@2.0.3/pineapple/dist/js/pineapple.min.js"></script>
    <script src="https://kit.fontawesome.com/0dd4ecd465.js" crossorigin="anonymous"></script>
    <script>
        function wholesaleMessage() {
            alert("Please contact us to inquire about our wholesale program.");
        }
        function returnPolicy() {
            alert("Please contact us to inquire about our return policy.")
        }
    </script>
</body>

</html>
