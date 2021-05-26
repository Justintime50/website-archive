<?php

/*
if(!isset($_POST['Send']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "ERROR. You need to submit the form!";
	exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$asin = $_POST['asin'];

//Validate first
/*
if(empty($name) || empty($customer_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($customer_email))
{
    echo "Bad email value!";
    exit;
}
*/


$email_from = 'NA';

$email_body = "
              You've received a new lead from primebusinessdevelopment.com. A customer has provided their information below and requests to be contacted. \n\n

              FREE LISTING ANALYSIS \n\n

              Customer: $name \n 
              Email: $email \n 
              Phone: $phone \n 
              ASIN: $asin \n
              ";
    


$to = "NA";
$headers = "From: $email_from \r\n";
/*
$headers .= "Reply-To: $email \r\n";
*/

// Send the email!
mail($to,$subject,$email_body,$headers);
// Success
/*
header('Location: index.php');
*/

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 
