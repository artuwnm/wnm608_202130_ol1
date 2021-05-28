

<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = getCart();

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();



?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cart</title>

<?php include "parts/meta.php"; ?>

<script src="js/product_thumbs.js"></script>

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
			<div class="card soft flat">
				<?= cartTotals() ?>
				<div class="card-section">
						<a href="purchase_page.php" class="form-button">Proceed to Checkout</a>
				</div>
			</div>
		</div>		
	</div> 



		<?php 
	}else{
		?>
		<div class="card soft">
			<p>Sorry, there are no items in your cart</p>
		</div>
			<h3>Product Recommendations</h3>
			<?php recommendedAnything(6); ?>
		
		<?php
			}
		?>
</div>

</body>
</html>

