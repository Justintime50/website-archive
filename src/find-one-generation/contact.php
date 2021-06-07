<!DOCTYPE html>
<html>

<?php include 'header.php';?>

<title>Contact</title>

<body>

    <?php include 'nav.php';?>

    <div class="container-fluid text-center">
        <div class="container">

            <br>

            <h1>Contact Us</h1>

            <br>
            <p>Questions, comments, or concerns? Contact us at user@example.com.</p>
            <br><br>

        </div>
    </div>

    <!-- Email Form -->
    <form action="#" method="post">
        Name:<br>
        <input type="text" name="name" placeholder="John Doe"><br>
        Subject:<br>
        <select name="subject">
            <option value="General Questions">General Questions</option>
            <option value="Question: How it Works">Question: How it Works</option>
            <option value="Question: What I Receive">Question: What I Receive</option>
            <option value="Question: Who Should Use This Service">Question: Who Should Use This Service</option>
            <option value="Get Started">Get Started</option>
        </select><br>
        Email:<br>
        <input type="text" name="email" placeholder="user@example.com"><br>
        Message:<br>
        <textarea type="text" name="message" placeholder="Email content" rows="20" cols="100"></textarea><br><br>
        <input type="submit" name="Send" value="Send" disabled>
        <input type="reset" name="Reset" value="Reset">
    </form>

    <hr>

    <?php include 'footer.php';?>

    </div> <!-- Body div -->
    </div>
</body>

</html>
