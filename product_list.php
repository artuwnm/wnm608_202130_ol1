<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
	
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
			<h2>Product List</h2>

			<?php

			include_once "lib/php/functions.php";
			include_once "parts/templates.php";

			$result = makeQuery(
				makeConn(),
				"
				SELECT *
				FROM `products`
				ORDER BY `date_create` DESC
				LIMIT 12
				"
			);

			echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";
			
			?>
	</div>
	
</body>
</html>