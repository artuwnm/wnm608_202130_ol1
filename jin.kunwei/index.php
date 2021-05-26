<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gaming House</title>

	<?php include "parts/meta.php"; ?>
</head>
<body class="flush">
	<?php include "parts/navbar.php"; ?>	

	<div class="view_window" style="background-image: url('img/gaming_1.jpg');"></div>
</div>	

<div class="images">
	<h2 class="images-a">Welcome to the Game House</h2>
	<p >We are a gaming shopping company aiming to provide a great shopping experience for game lovers to find the most appropriate devices. </p>
</div>

<div class="container">
	<h2> Latest Gaming Desktops</h2>
	<?php recommendedCategory("Gaming Desktops"); ?>
</div>
	
<h3 class="newsletters">Join Our Newsletters</h3>

</body>
</html>