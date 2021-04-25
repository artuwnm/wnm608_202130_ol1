<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Checkout Page</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<div class="card soft">
			<h2>Product Checkout</h2>
			<div class="card soft">
				<h3 id="controls">Address</h3>
				<form>
					<div class="form-control">
						<label for="address-street" class="form-label">Street Name</label>
						<input type="text" placeholder="Street Name" class="form-input">
					</div>
					<div class="form-control display-flex">
						<div class="grid gap">
							<div class="col-xs-12 col-md-6">
								<div class="flex-none"><label for="address-city" class="form-label">City</label></div>
								<div class="flex-stretch"><input type="search" placeholder="City"class="form-input"></div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="flex-none"><label for="address-state" class="form-label">State</label></div>
								<div class="flex-stretch"><input type="search" placeholder="State"class="form-input"></div>
							</div>
						</div>
					</div>
					<div class="form-control display-flex">
						<div class="grid gap">
							<div class="col-xs-12 col-md-6">
								<div class="flex-none"><label for="address-zip" class="form-label">Zip Code</label></div>
								<div class="flex-stretch"><input type="search" placeholder="Zip Code"class="form-input"></div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="flex-none"><label for="address-country" class="form-label">Country</label></div>
								<div class="flex-stretch"><input type="search" placeholder="Country"class="form-input"></div>
							</div>
						</div>	
					</div>
				</form>
			</div>
			<div>
				<h3 id="controls">Payment</h3>
				<form>
					<div class="form-control">
						<div class="grid gap">
							<div class="col-xs-12 col-md-6">
								<label for="payment-name" class="form-label">Full Name</label>
								<input id="payment-name" type="text" placeholder="Full Name" class="form-input">
							</div>
						</div>
					</div>
					<div class="form-control">
						<div class="grid gap">
							<div class="col-xs-12 col-md-6">
								<label for="payment-card" class="form-label">Card Number</label>
								<input id="payment-card" type="text" placeholder="#### #### #### ####" class="form-input">
							</div>
						</div>
					</div>
					<div class="form-control display-flex">
						<div class="grid gap">
							<div class="col-xs-12 col-md-6">
								<div class="flex-none"><label for="payment-expiration" class="form-label">Expiration Date</label></div>
								<div class="flex-stretch"><input id="payment-expiration" type="search" placeholder="mm/yy"class="form-input"></div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="flex-none"><label for="payment-cvv" class="form-label">CVV</label></div>
								<div class="flex-stretch"><input id="payment-cvv" type="search" placeholder="###"class="form-input"></div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="flex-none"><label for="payment-zip" class="form-label">Zip Code</label></div>
								<div class="flex-stretch"><input id="payment-zip" type="search" placeholder="Zip Code"class="form-input"></div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="form-control">
					<!--<button type="submit" class="form-button" value="Submit">Submit</button>-->
				<a href="product_confirmation.php" class="form-button">Confirm Order</a>
			</div>
	</div>

	





<?php include "parts/footer.php"; ?>
</body>
</html>