<?php
/////
//
// Script enters warranty data into warranty database
//
/////


// Stores login information externally
require '../../sql-login.php';

// Use the Tuneup Technology database
$dbname = "prime_business_development";

// Console error
$console = "<hr><b>Console:</b><br>";

// Create connection
$conn = new mysqli($servername, $sqlusername, $sqlpassword, $dbname);

// Validate connection and data pull
if ($conn->connect_error) {
    die($console. "SQL Connection Failed:<br>" . $conn->connect_error. "<hr>");
    return false;
}

// Define variables
$email = $_POST["email"];



// Validate form has been filled completely before proceeding
if(empty($email))
{
    echo "<script>alert('Email is required, please try again.');document.location.href = 'index.php';</script>";
    exit;
}

// Validate proper handling of input variables
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "<br><b>ERROR</b><br>Please enter a valid email address."; 
  exit;
}


$sql = "INSERT INTO fidget_motion (email) VALUES ('$email');";



$query = mysqli_query($conn, $sql);
if($query) {
    echo "<script>alert('Thanks for signing up!');document.location.href = 'index.php';</script>";
} else {
    echo "<b>SQL ERROR</b>:<br>" . $conn->error;
}

$conn->close();

?>