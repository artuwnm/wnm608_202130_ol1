<?php
	
include_once "lib/php/functions.php";
include_once "parts/templates.php";
	
$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<h2>Your Cart</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart,'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section">
						<strong>Subtotal</strong>
						<div>&dollar;90</div>
					</div>
					<div class="card-section">
						<strong>Taxes</strong>
						<div>&dollar;8.75</div>
					</div>
					<div class="card-section">
						<strong>Shipping</strong>
						<div>&dollar;10</div>
					</div>
					<div class="card-section">
						<strong>Total</strong>
						<div>&dollar;108.75</div>
					</div>
					<div class="card-section">
						<a href="product_checkout.php" class="form-button">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	




<?php include "parts/footer.php"; ?>
</body>
</html>