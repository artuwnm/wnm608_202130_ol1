<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";






?>



<! DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h1>Checkout</h1>
			<div class="card hard">
		<form>		
			<h3 id="controls">Shipping Information</h3>
				
						<div class="form-control">
							<label class="form-label">Email</label>
							<input type="text" placeholder="Email" class="form-input">
						</div>


						<div class="form-control display-flex flex-align-center">
							<div class="flex-none">
								<label class="form-label">First Name</label>
							</div>

							<div class="flex-stretch">
								<input type="search" placeholder="Name" class="form-input">
							</div>
						
							<div class="flex-none">
								<label class="form-label">Middle Initial</label>
							</div>

							<div class="flex-stretch">
								<input type="search" placeholder="Name" class="form-input">
							</div>

							<div class="flex-none">
								<label class="form-label">Last Name</label>
							</div>

							<div class="flex-stretch">
								<input type="search" placeholder="Name" class="form-input">
							</div>
						</div>


						<div class="form-control">
							<label class="form-label">Street Address</label>
							<input type="number" placeholder="Address" class="form-input">
						</div>


						<div class="form-control display-flex flex-align-center">
							<div class="flex-none">
								<label class="form-label">City</label>
							</div>

							<div class="flex-stretch">
								<input type="search" placeholder="City" class="form-input">
							</div>
						
							<div class="flex-none">
								<label class="form-label">State</label>
							</div>

							<div class="flex-stretch">
								<input type="search" placeholder="State" class="form-input">
							</div>

							<div class="flex-none">
								<label class="form-label">Zip Code</label>
							</div>

							<div class="flex-stretch">
								<input type="search" placeholder="Zip Code" class="form-input">
							</div>
						</div>
					


					<h3 id="controls">Payment Information</h3>
					
						<div class="form-control">
							<label class="form-label">Name on Card</label>
							<input type="text" placeholder="Name on Card" class="form-input">
						</div>

						<div class="form-control">
							<label class="form-label">Card Number</label>
							<input type="number" placeholder="Card Number" class="form-input">
						</div>


						<div class="form-control display-flex flex-align-center">
							<div class="flex-none">
								<label class="form-label">Expiration Date</label>
							</div>

							<div class="flex-stretch">
								<input type="search" placeholder="month/year" class="form-input">
							</div>
						
							<div class="flex-none">
								<label class="form-label">CVC</label>
							</div>

							<div class="flex-stretch">
								<input type="search" placeholder="CVC" class="form-input">
							</div>
						</div>


						<div style="text-align:center">
							<div class="form-control">
								<a href="confirmation_page.php" class="form-button">Checkout</a>
							</div>
					</form>
</div>

</body>
</html>