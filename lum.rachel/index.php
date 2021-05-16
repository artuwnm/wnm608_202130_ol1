<?php


include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>


<div class="container">
		<h1>Home</h1>
</div>


	<div class="container">
		<h2>Featured Hair Products</h2>
		<?php
		recommendedCategory("hair");
		?>
		<h2>Featured Eye Products</h2>
		<?php
		recommendedCategory("eyes");
		?>

	</div>

</body>
</html>











