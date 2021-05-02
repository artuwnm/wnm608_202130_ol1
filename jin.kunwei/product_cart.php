<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (3,11,5)");

	$cart_items = getCartItems();
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart Page</title>

	<?php include "parts/meta.php"; ?>
</head>
<body> 

	<?php include "parts/navbar.php"; ?>

	<div class="container">	
			<h2>Your Cart</h2>
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart_items,'cartListTemplate') ?>	
					</div>
				</div>	
				<div class="col-xs-12 col-md-5">
					<?= cartTotals() ?>
				</div>
			</div>			
		</div>
	</div>

</body>
</html>

