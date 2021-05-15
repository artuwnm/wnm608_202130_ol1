<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPHONING</title>

	<?php include "parts/meta.php"; ?>
</head>

<body>

	<?php include "parts/navbar.php"; ?>

	
	<div class="view-window" style="background-image: url('img/view_img.png');">
		<h1>IPHONING</h1>
		<p>A place for iphone accessories</p>
	</div>

	<div class="container">
	<h2> Popular Charger</h2>
	<?php recommendedCategory("Charger"); ?>
	<h2> Popular Cell Phone Cases</h2>
	<?php recommendedCategory("Cell Phone Cases"); ?>
</div>

		
	<div class="newsletters">
		<h3>Join Newsletters</h3>
		<div class="button">
			<p>Join</p>
		</div>
	</div>

</body>
</html>