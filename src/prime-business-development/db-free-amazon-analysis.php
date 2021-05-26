<?php
/////
//
// Script enters amazon analysis info into the DB
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
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$asin = $_POST["asin"];




// Validate form has been filled completely before proceeding
if(empty($name) || empty($email) || empty($phone) || empty($asin))
{
    echo "<script>alert('All information is required, please try again.');document.location.href = 'index.php';</script>";
    exit;
}

// Validate proper handling of input variables
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  echo "<br><b>ERROR</b><br>Only letters and white spaces allowed in the name field, please go back and try again."; 
  exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "<br><b>ERROR</b><br>Please enter a valid email address."; 
  exit;
}
if (!preg_match("/^[0-9-]*$/",$phone)) {
  echo "<br><b>ERROR</b><br>Only letters and dashes are allowed in the phone field, please go back and try again."; 
  exit;
}


$sql = "INSERT INTO free_amazon_analysis (name, email, phone, asin) VALUES ('$name', '$email', '$phone', '$asin');";



$query = mysqli_query($conn, $sql);
if($query) {
    include 'db-free-amazon-analysis-email.php';
    echo "<script>alert('We have received your request to analyze your Amazon listing. We will contact you shortly with our analysis.');document.location.href = 'index.php';</script>";
} else {
    echo "<b>SQL ERROR</b>:<br>" . $conn->error;
}

$conn->close();

?>
