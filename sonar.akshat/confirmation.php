<?php
include_once "php/functions.php";
include_once "parts/templates.php";
?>
<?php

resetCart();
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
		<h1 class="h1">Your Order is Confirmed!</h1>
	</div>

	<div style="display: flex; justify-content: center; padding-top: 50px;">
		<div class="confirmsec">
			<div class="confirmsec2">
				<p class="parasec">You will shortly recieve a confirmation email with your order details.</p>
			</div>

			<div class="btns3">
				<button class="cartbtn3" onclick="location.href='store.php'">Continue Shopping</button>
			</div>
		</div>
	</div>

	<!--<div>
		<h2 style="text-align: center;padding-top: 30px;">Recommended Products</h2>
	

		<?php recommendedCategory("Discs"); ?>

	</div>-->

</body>
</html>