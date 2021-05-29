
<?php

include_once "../lib/php/functions.php";
include_once "../parts/templates.php";


$cart = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout Page</title>

	<meta name="viewport" content="width=device-width">

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>

	<div class="container">
		<div class="grid gap card medium">

			<div class="col-xs-12 col-md-7">
				<h2>CHECKOUT</h2>
				<div class="card hard">
					
					<form class="form">
					
						<h3>ADDRESS</h3>
						<div class="border_bottom"></div>
						<div class="form-control">
							<label for="adress-street" class="form-label">Street</label>
							<input id="adress-street" type="text" placeholder="Street Name" class="form-input">
						</div>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs-12 col-md-6">
									<label for="adress-city" class="form-label">City</label>
									<input id="adress-city" type="text" placeholder="City" class="form-input">
								</div>
								<div class="col-xs-12 col-md-6">
									<label for="adress-state" class="form-label">State</label>
									<input id="adress-state" type="text" placeholder="State" class="form-input">
								</div>
							</div>
						</div>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs-12 col-md-6">
									<label for="adress-zip" class="form-label">Zip Code</label>
									<input id="adress-zip" type="text" placeholder="Zip Code" class="form-input">
								</div>
								<div class="col-xs-12 col-md-6">
									<label for="adress-country" class="form-label">Country</label>
									<input id="adress-country" type="text" placeholder="Country" class="form-input">
								</div>
							</div>
						</div>

						<br><br>

						<h3>PAYMENT</h3>
							<div class="border_bottom"></div>
							<div class="form-control">
								<label for="payment-name" class="form-label">Full Name</label>
								<input id="payment-name" type="text" placeholder="Name" class="form-input">
							</div>
							<div class="form-control">
								<label for="payment-number" class="form-label">Card Number</label>
								<input id="payment-number" type="text" placeholder="xxxx xxxx xxxx" class="form-input">
							</div>
							<div class="form-control">
								<div class="grid gap">
									<div class="col-xs-12 col-md-6">
										<label for="payment-expiration" class="form-label">Expiration</label>
										<input id="payment-expiration" type="text" placeholder="MM/YY" class="form-input">
									</div>
									<div class="col-xs-12 col-md-6">
										<label for="payment-cvv" class="form-label">CVV</label>
										<input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
									</div>
								</div>
								<div class="form-control">
										<label for="payment-zip" class="form-label">Zip Code</label>
										<input id="payment-zip" type="text" placeholder="zip code" class="form-input">
								</div>
							</div>
				
							

					</form>
				</div>
				
			</div>

			<div class="col-xs-12 col-md-5">
				<div class="card medium">
					<div class="etc-letters">Review Items</div>
					<div class="card-section">
					<?=
					 array_reduce($cart,function($r,$o){
						$totalfixed = number_format($o->total,2,'.','');
						return $r."<div class='display-flex'>
							<div class='flex-stretch'>$o->name</div>
							<div class='flex-none'>&dollar;$totalfixed</div>
						</div>";
					}) ?>

					</div>
					<?= cartTotals(); ?>
					<br><br>
					<a href="notes/product_confirmation.php" class="form-button">Complete Checkout</a>
				</div>
			</div>
		</div>
	</div>


</body>
</html>