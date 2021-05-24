<?php


include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>


<div class="container">
		<h1>Welcome to LUX Beauty!</h1>
		<div class="display-flex">
	<div class="flex-stretch">
		<img src="img/featured-photo.jpg" style="padding-right: 3em">
	</div>
	<div class="flex-none"></div>
	<div class="flex-stretch">
		<p>LUX Beauty is here to provide you with an easy way to fill all your hair, makeup and beauty needs!</p>
	</div>
	</div>
</div>


	<div class="container">
		<h2>Featured Hair Products</h2>
		<?php
		recommendedCategory("hair");
		?>
	</div>

	<div class="view-window" style="background-image: url('img/view-window.jpg')">
		
	</div>


	<div class="container">
		<h2>Featured Eye Products</h2>
		<?php
		recommendedCategory("eyes");
		?>
	</div>

</body>
</html>











