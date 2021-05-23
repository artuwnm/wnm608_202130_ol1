<?php 

include_once "lib/php/functions.php";
resetCart();

?>

<!DOCTYPE html> <!-- html:5 -->

<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product Checkout</title>


	<?php include "parts/meta.php"; ?>
</head>

<body style="background-color: white; padding: 0;">

	<div style="background-color: #e5c2c1; width: 100%; height: 2em;">
		
	</div>
	<?php include "parts/header_nav.php" ?>

	<div class="container shop" style="margin-bottom: 12em;">
		
		<div class="order_confirm">
			<div class="item_line" style="margin-top: 6em; text-align: center;">
				<h1 class="thankyou_text">Thank your for your purchase!</h1>
			</div>
			<div class="divide_line1" style="margin-top: -1em;"></div>
		</div>

		<div class="card thankYou_box">
			<h2 class="thankYou_notes">We hope you enjoy your shopping</h2>
			<h2 class="thankYou_notes">Your order was completed successfully</h2>
		</div>


		<div class="back_button" style="margin-top: 4em; text-align: right;">
		
				
		<span><a href="product_list.php">Continue Shopping &#8640;</a></span>

		
	</div>

	</div>
	

	


	<?php include "footer.php"; ?>
</body>
</html>		