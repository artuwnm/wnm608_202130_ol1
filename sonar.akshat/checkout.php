<?php 
include_once "php/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Cart Page</title>
	<?php include "parts/meta.php"; ?>
  
</head>

<body>
	
	<?php include "parts/navbar.php"; ?>

	<div>
		<h1 class="h1">Checkout</h1>
	</div>

	<div class="section">
		
			
			<div class="paymeth">

				<div class="paymeth2">
					<h2>Payment Method</h2>
					<label class="container paytext">VISA
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>

					<label class="container paytext">Mastercard
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>

					<label class="container paytext">Rupay
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>

					<label class="container paytext">UPI
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
				</div>
			</div>

		<div class="form">
			<form>	
				<h2>Payment</h2>
				<label for="full-name" class="paytext2">Full Name</label><br>
				<input class="definput" name="full-name" id="full-name" type="text" placeholder="Akshat Sonar"><br>
			
				<label for="card" class="paytext2">Card Number</label><br>
				<input class="definput" name="card" id="card" type="text" placeholder="4233 1545 2111 4532"><br>

				<label for="exp" class="paytext2">Expiration</label><br>
				<input class="definput" name="exp" id="exp" type="month" placeholder="MM-YY"><br>

				<label for="cvv" class="paytext2">CVV</label><br>
				<input class="definput" name="cvv" id="cvv" type="text" placeholder="340"><br>

				<label for="zip" class="paytext2">Zip Code</label><br>
				<input class="definput" name="zip" id="zip" type="text" placeholder="400 101"><br>
			</form>
		</div>

		<div class="form">
				<form>
					<h2>Address</h2>	
					<label for="street" class="paytext2">Street</label><br>
					<input class="definput" name="street" id="street" type="text" placeholder="Enter Address"><br>

					<label for="city" class="paytext2">City</label><br>
					<input class="definput" name="city" id="city" type="text" placeholder="Mumbai"><br>

					<label for="state" class="paytext2">State</label><br>
					<input class="definput" name="state" id="state" type="text" placeholder="Maharashtra"><br>

					<label for="country" class="paytext2">Country</label><br>
					<input class="definput" name="country" id="country" type="text" placeholder="India"><br>

					<label for="zip" class="paytext2">Zip Code</label><br>
					<input class="definput" name="zip" id="zip" type="text" placeholder="400 101"><br>
				</form>
		</div>
	</div>

	<div class="btns">	
		<button class="defbutton4" onclick="location.href='cart.php'">Back</button> 
		<button class="defbuttton3" onclick="location.href='confirmation.php'">Complete Checkout</button> 
	</div>


</body>
</html>