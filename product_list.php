<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="grid gap">
		<div class="col-xs-12 col-md-4">
			<div class="form-control">
				<form>
					<input type="search" class="hotdog" placeholder="search">
				</form>
			</div>
		</div>
		</div>
	</div>

	<div class="container">

			<h1 class="center">PRODUCT LIST</h1>


			<?php 

			include_once "lib/php/functions.php";
			include_once "parts/templates.php";

			$result = makeQuery(
				makeConn(),
				"
				SELECT *
				FROM `products`
				ORDER BY `price` DESC
				LIMIT 12
				"
			);

			echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";
 

			 ?>
		</div>
	</div>

	<div class="container">
	<div class="view-window" style="background-image: url('img/img 4.png');">
		<h3 class="center">Contact Infomation</h3>
		<div class="form-control center"><a href="#" class="form-button">Join Us</a></div>
	</div>
</div>






</body>
</html>