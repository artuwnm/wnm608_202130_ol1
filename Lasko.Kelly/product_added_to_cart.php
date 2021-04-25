<?php
	
include_once "lib/php/functions.php";
	
$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Added To Cart Confirmation Page</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<div class="card soft">
			<h2><?= $product->name ?> added to cart.</h2>
			
		
			<div class="display-flex">
				<div class="flex-none"><a href="product_list.php" class="form-button">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="product_cart.php" class="form-button">Continue To Cart</a></div>
			</div>

			<div class="form-control">
				
			</div>
		</div>
	</div>

	




<?php include "parts/footer.php"; ?>
</body>
</html>