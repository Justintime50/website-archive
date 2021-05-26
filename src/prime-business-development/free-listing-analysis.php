<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'header.php';?>
		<title>Prime Business Development</title>
	</head>
<body>

<?php include 'nav.php';?>



<div class="container" style="padding-top: 150px;">


<h1>Free Listing Analysis</h1>
<br><br>

<div class="row">

<div class="col-sm-6">

<div class="pa-well">

<p class="text-center index-text">Send us your information and we'll analize your product listing, for free! Receiving a listing analysis is a great way to measure your progress and to see what you can improve upon.</p>

<hr><br>

<h2>How We Grade</h2>
<br>
<h3 class="text-center">Title | Content | Pictures | Reviews | Keywords</h3>



</div>
</div>


<div class="col-sm-6">



<div class="pa-well">



<form action="db-free-listing-analysis.php" method="post">
<label for="name"><b>Name</b></label>
<input type="text" name="name" placeholder="" class="form-control"><br>

<label for="email"><b>Email</b></label>
<input type="email" name="email" placeholder="" class="form-control"><br>

<label for="phone"><b>Phone</b></label>
<input type="text" name="phone" placeholder="" class="form-control"><br>

<label for="asin"><b>ASIN # or Full Product Title</b></label>
<input type="text" name="asin" placeholder="" class="form-control"><br>

<br>
<button type="submit" class="btn btn-danger btn-lg text-center" style="width: 100%;">Submit</button>
</div>
</form>

<br><br>

</div>
</div>

</div>

<?php include 'footer.php';?>

</body>
</html>