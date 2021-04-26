

<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");


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

			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart,'cartListTemplate') ?>
					</div>
				
				<div class="col-xs-12 col-md-5">
					<div class="card soft flat">
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Sub Total</strong></div>
							<div class="flex-none">&dollar;3.50</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="card soft flat">
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Taxes</strong></div>
							<div class="flex-none">&dollar;3.50</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="card soft flat">
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Actual Total</strong></div>
							<div class="flex-none">&dollar;7.00</div>
						</div>
					</div>
					<div class="card-sections">
							<a href="purchase_page.php" class="form-button">Checkout</a>
						</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>