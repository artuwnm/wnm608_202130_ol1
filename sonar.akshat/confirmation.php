<?php
include_once "php/functions.php";
resetCart();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cart Page</title>

	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/site.webmanifest">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
</head>

<body>
	
	<?php include "parts/navbar.php"; ?>

	<div>
		<h1>Your Order is Confirmed!</h1>
	</div>

	<div style="display: flex; justify-content: center; padding-top: 50px;">
		<div class="confirmsec">
			<div class="confirmsec2">
				<p>You will shortly recieve a confirmation email with your order details.</p>
			</div>

			<div class="btns3">
				<button class="cartbtn3" onclick="location.href='store.php'">Continue Shopping</button>
			</div>
		</div>
	</div>

</body>
</html>