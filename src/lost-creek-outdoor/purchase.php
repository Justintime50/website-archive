<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="66" onload="pineapple.pageLoader()">

<?php include 'nav.php';?>




<!-- Content -->
<div id="pa-loader"></div>
<div id="pa-loaderDiv" style="overflow-y: hidden;">

  <!-- known glitch, once a product is selected the scale goes back to 1, look into -->
  <meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=0.9"> <!-- Allows mobile to display correctly --> 
  <iframe src="https://squareup.com/store/lost-creek-trading-llc" frameborder="0" style="height:100%;width:100%;position:absolute;top:0px;left:0px;right:0px;bottom:0px;padding-top:60px;"></iframe>

</div>


<!-- SCRIPTS INCLUDED BECAUSE IFRAME BREAKS FOOTER-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://pa-lib.com/pineapple/1.1.0/js/pineapple.min.js"></script>
<script src="https://use.fontawesome.com/12e4399d79.js"></script>
