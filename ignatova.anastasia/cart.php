<?php 

		include_once "lib/php/functions.php";
		include_once "parts/templates.php";

		// $cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (1,5,10)");

		$cart_items = getCartItems();

$cart = getCart();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, <!-- initial-scale=1.0 -->">

	<?php include "parts/meta.php"; ?>


	<title>Cart</title>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


<div class="container">
	<!-- <h2>Shopping Cart</h2> -->

<?php 
if(count($cart)) {
?>
<div class="grid gap">
		<div class="col-xs-12 col-md-7">
			<div class="card soft">
				<?= array_reduce($cart_items,'cartListTemplate') ?> 
			</div>
		</div>

		<div class="col-xs-12 col-md-5">
			<div class="card soft flat">
				<?= cartTotals() ?>

					<div class="card-section display-flex flex-justify-center">
						<a href="product_checkout.php" class="form-button" style="margin-top: 1em;">Proceed to Checkout</a>
					</div>
			</div>
		</div>
	</div>
	<?php
} else {
?>
<!-- 	<div class="card soft"> -->
	<h1 class="text-center" style="padding: 0.5em;">Oh No!</h1>

	<p class="text-center" style="padding-bottom: 5em;">Your cart is empty.</p>

	<h3 class="text-center" style="padding: .5em;">Hottest Items</h3>

	<?php recommendedAnything(6); ?>

	<!-- </div> -->

<?php 
}

?>


</div>





</body>
</html>