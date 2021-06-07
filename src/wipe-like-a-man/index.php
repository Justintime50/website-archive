<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mr Wipes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/pics/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pineapple-library@2.0.2/pineapple/dist/css/pineapple.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pineapple-library@2.0.2/templates/waterfall/assets/css/waterfall.min.css">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="70">
    <nav class="navbar navbar-inverse navbar-toggleable-lg fixed-top pa-nav-fade">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#myNavbar"
            aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#home">
            <h1 class="navbar-brand">MR WIPES</h1><img src="assets/pics/logo.png" class="logo" alt="Logo"
                style="width:60px;">
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#products">PRODUCTS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">PURCHASE</a></li>
                <li class="nav-item"><a class="nav-link" href="#about-us">ABOUT US</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact-us">CONTACT US</a></li>
            </ul>
        </div>
    </nav>

    <div class="pa-banner pa-banner-darken">
        <div class="pa-banner-text">
            <br>
            <br>
            <h2 class="pa-banner-heading" style="letter-spacing: 6px;font-size: 9vmin;">Wipe Like A Man<br>Smell Like A
                Gent</h2>
            <br>
            <a href="#"><button class="btn btn-lg pa-btn-banner" style="margin-top: 20px;">Purchase</button></a>
        </div>
    </div>

    <div id="products"></div>
    <div class="container-fluid pa-bg-gray">
        <h2>Products</h2><br>
        <div class="row">
            <div class="col-sm-6 pa-slideanim">
                <h3>Mr Wipes</h3>
                <p class="text-left">Mr. Wipes are flushable, 100% biodegradable male hygiene wipes.</p>
                <p>They are used for cleaning after the bathroom, after a trip to the gym, a meal, or for anything else.
                </p>
                <p>They are equipped with soothing Aloe Vera, hypoallergenic, and leaves nothing but a refreshing manly
                    scent.</p>
                <p>Mr. Wipes comes in pouches that you can keep in your home, or in single disposables you can take
                    anywhere.</p>

                <p>Our Mission is to keep you feeling confident and clean for anything that will come your way.</p>
                <p>You are a gentleman, be gentle down there.</p>
                <p>Mr. Wipes wants you to stay on top of your A game.</p>
                <p>Being absolutely clean down there is essential to feeling confident.</p>
                <p>Never get in a messy situation, keep Mr. Wipes close by, and rest easy.</p>

                <a href="#"><button class="btn btn-lg pa-btn-other" style="margin-top: 20px;">Purchase</button></a>
                <br>
            </div>
            <div class="col-sm-6 pa-slideanim" style="display: block;text-align: center;">
                <img src="assets/pics/MrWipes2.jpg" style="max-width: 100%;border-radius: 0.5em;">
                <br><br><br>
                <img src="assets/pics/MrWipes4.jpg" style="max-width: 100%;border-radius: 0.5em;">
            </div>
        </div>
    </div>

    <div id="about-us" class="container-fluid text-center pa-slideanim">
        <h2>About Us</h2><br>
        <p>In 2012, Mr. Wipes founder Joel Zae realized that his roommate in college used baby wipes instead of toilet
            paper in the bathroom. At first Joel thought it was very weird, thinking wipes were just for babies. However
            one day after finally trying one, Joel never went back. Still, these baby wipes were far from what Joel
            really needed.</p>
        <br>
        <p>In 2013 Joel created a bigger, flushable, more manly wipe that would change the way men wiped forever. Joel
            wanted to share his innovation with his fellow gents, and thus Mr. Wipes was founded.</p>
    </div>

    <div id="contact-us"></div>
    <div class="container-fluid pa-bg-gray">
        <h2>Contact Us</h2><br>

        <div class="pa-slideanim">
            <div class="pa-card" style="margin-top: 0px;">
                <label>Have a question? Special order?<br>Contact us!</label>
                <br><br>
                <p>Phone:<br>801-555-1234</p>
                <p>Email:<br><span style="font-size: 3.5vmin">user@example.com</span></p>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <a href="#home" title="To Top" class="pa-scroll">
            <span class="fa fa-chevron-up fa-lg" aria-hidden="true"></span>
        </a>
        <div style="padding-top: 30px;letter-spacing:1.5px;">
            <p>&#169;
                <?php echo date("Y");?> Mr Wipes, All rights reserved.
            </p>
            <p>Design: Justin Hammond</p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/pineapple-library@2.0.2/pineapple/dist/js/pineapple.min.js"></script>
    <script src="https://kit.fontawesome.com/0dd4ecd465.js" crossorigin="anonymous"></script>
</body>

</html>
