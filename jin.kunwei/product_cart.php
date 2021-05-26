<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (3,11,5)");

	$cart_items = getCartItems();

	$cart = getCart();
	
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

			<?php

			if(count($cart)) {
				?>
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce(getCartItems(),'cartListTemplate') ?>	
					</div>
				</div>	
				<div class="col-xs-12 col-md-5">
					<div class="card soft flat" >
						<?= cartTotals() ?>
						<div class="card-section">
							<a href="product_checkout.php" class="form-button">Check Out</a>
						</div>
				
					</div>	
				</div>
			</div>
			<?php
		} else {
			?>
				<div class="card soft">
					<p>No items in Cart</p>
				</div>

				<h3>Other Recommendations</h3>
				<?php recommendedAnything(8); ?>
			<?php	
		}
		?>				
		

	</div>

</body>
</html>

