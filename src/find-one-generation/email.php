<?php
if(!isset($_POST['Send']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "ERROR. You need to submit the form!";
	exit;
}

$name = $_POST['name'];
$subject = $_POST['subject'];
$customer_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($customer_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($customer_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'server@tuneuptechnology.com';

$email_body = " Customer: $name \n Email: $customer_email \n Message: \n\n $message \n";
    
$to = "server@tuneuptechnology.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $customer_email \r\n";

// Send the email!
mail($to,$subject,$email_body,$headers);
// Success
header('Location: success.php');


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