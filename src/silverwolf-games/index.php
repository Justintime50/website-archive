<!DOCTYPE html>
<html>

<head>
    <?php include('header.php');?>

    <script src="assets/js/fadeslideshow.js">
        /***********************************************
        * Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
        * This notice MUST stay intact for legal use
        * Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
        ***********************************************/
    </script>

    <script>
        var mygallery = new fadeSlideShow({
            wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
            dimensions: [320, 320], //width/height of gallery in pixels. Should reflect dimensions of largest image
            imagearray: [
                ["assets/pics/big_pics/fire_swarm-ss1-b.png", "fire-swarm.php", "", "Fire Swarm"],
                ["assets/pics/big_pics/madness-ss1-b.png", "madness.php", "", "Madness"],
                ["assets/pics/big_pics/the_great_maze-ss1-b.png", "the-great-maze.php", "", "The Great Maze"],
                ["assets/pics/big_pics/the_ghost_tomb-ss1-b.png", "the-ghost-tomb.php", "", "The Ghost Tomb"],
                ["assets/pics/big_pics/the_ghost_tomb2-ss1-b.png", "the-ghost-tomb_2.php", "", "The Ghost Tomb II"],
                ["assets/pics/big_pics/the_ghost_tomb3-ss1-b.png", "the_-host-tomb_3.php", "", "The Ghost Tomb III"] //<--no trailing comma after very last image element!
            ],
            displaymode: { type: 'auto', pause: 3000, cycles: 0, wraparound: false },
            persist: false, //remember last viewed slide and recall within same session?
            fadeduration: 700, //transition duration (milliseconds)
            descreveal: "peekaboo",
            togglerid: ""
        })
    </script>

    <script>
        var mygallery = new fadeSlideShow({
            wrapperid: "fadeshow2", //ID of blank DIV on page to house Slideshow
            dimensions: [320, 320], //width/height of gallery in pixels. Should reflect dimensions of largest image
            imagearray: [
                ["assets/pics/big_pics/fire_swarm-ss2-b.png", "fire-swarm.php", "", "Fire Swarm"],
                ["assets/pics/big_pics/madness-ss2-b.gif", "madness.php", "", "Madness"],
                ["assets/pics/big_pics/the_great_maze-ss2-b.png", "the-great-maze.php", "", "The Great Maze"],
                ["assets/pics/big_pics/the_ghost_tomb-ss2-b.png", "the-ghost-tomb.php", "", "The Ghost Tomb"],
                ["assets/pics/big_pics/the_ghost_tomb2-ss2-b.png", "the-ghost-tomb_2.php", "", "The Ghost Tomb II"],
                ["assets/pics/big_pics/the_ghost_tomb3-ss2-b.png", "the-ghost-tomb_3.php", "", "The Ghost Tomb III"] //<--no trailing comma after very last image element!
            ],
            displaymode: { type: 'auto', pause: 3000, cycles: 0, wraparound: false },
            persist: false, //remember last viewed slide and recall within same session?
            fadeduration: 700, //transition duration (milliseconds)
            descreveal: "peekaboo",
            togglerid: ""
        })
    </script>

    <script>
        var mygallery = new fadeSlideShow({
            wrapperid: "fadeshow3", //ID of blank DIV on page to house Slideshow
            dimensions: [320, 320], //width/height of gallery in pixels. Should reflect dimensions of largest image
            imagearray: [
                ["assets/pics/big_pics/fire_swarm-ss3-b.png", "fire-swarm.php", "", "Fire Swarm"],
                ["assets/pics/big_pics/madness-ss3-b.gif", "madness.php", "", "Madness"],
                ["assets/pics/big_pics/the_great_maze-ss3-b.png", "the-great-maze.php", "", "The Great Maze"],
                ["assets/pics/big_pics/the_ghost_tomb-ss3-b.png", "the-ghost-tomb.php", "", "The Ghost Tomb"],
                ["assets/pics/big_pics/the_ghost_tomb2-ss3-b.png", "the-ghost-tomb_2.php", "", "The Ghost Tomb II"],
                ["assets/pics/big_pics/the_ghost_tomb3-ss3-b.png", "the-ghost-tomb_3.php", "", "The Ghost Tomb III"] //<--no trailing comma after very last image element!
            ],
            displaymode: { type: 'auto', pause: 3000, cycles: 0, wraparound: false },
            persist: false, //remember last viewed slide and recall within same session?
            fadeduration: 700, //transition duration (milliseconds)
            descreveal: "peekaboo",
            togglerid: ""
        })
    </script>
</head>

<body>

    <header class="container">
        <a href="index.php">
            <img src="assets/pics/site/swg_logo.png" class="logo" alt="SilverWolf Games Logo"
                title="SilverWolf Games" />
            <img src="assets/pics/site/swg_header.png" class="logo-name" alt="SilverWolf Games" title="SilverWolf Games" />
        </a>
    </header>

    <?php include('nav.php');?>

    <div class="container text-center">
        <h2 style="margin: 30px;">"Providing fun for the casual gamer."</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div id="fadeshow1"></div>
            </div>
            <div class="col-md-4">
                <div id="fadeshow2"></div>
            </div>
            <div class="col-md-4">
                <div id="fadeshow3"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="game-list">
            <h6>Games</h6>
            <hr />
            <h2><a href="fire-swarm.php">Fire Swarm</a></h2>
            <h2><a href="madness.php">Madness</a></h2>
            <h2><a href="the-great-maze.php">The Great Maze</a></h2>
            <h2><a href="the-ghost-tomb.php">The Ghost Tomb</a></h2>
            <h2><a href="the-ghost-tomb_2.php">The Ghost Tomb II</a></h2>
            <h2><a href="the-ghost-tomb_3.php">The Ghost Tomb III</a></h2>
        </div>
    </div>

    <?php include('footer.php');?>
</body>

</html>
