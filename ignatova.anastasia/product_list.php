<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, <!-- initial-scale=1.0 -->">


<!-- META INFO -->
	<?php include "parts/meta.php"; ?>


	<title>Product List</title>
</head>
<body>
	
	<!-- NAVABAR -->
	<?php include "parts/navbar.php"; ?>


<div class="container">
		<h2>Product List</h2>


	<?php 

		include_once "lib/php/functions.php";
		include_once "parts/templates.php";

		$result = makeQuery(makeConn(), 
			"SELECT *
			FROM `products`
			ORDER BY `date_create` DESC 
			LIMIT 12
			"
			);

		echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'), "</div>";

	?>













</div>

</body>
</html>