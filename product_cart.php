<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (2,6,12)");

	
?>

<!DOCTYPE html>  <!--html:5 -->

<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Shopping Cart</title>

	<?php include "parts/meta.php"; ?>


</head>

<body style="background-color: white; padding: 0;">

	<div style="background-color: #e5c2c1; width: 100%; height: 2em;">
		
	</div>
	<?php include "parts/header_nav.php"; ?>


	<div class="container individual_item" style="margin-bottom: 15em;">
		
		<div class="item_line" style="margin-top: 7em;">
			<h2>Shopping Cart</h2>
		</div>
		<div class="divide_line1" style="margin-top: -1em;"></div>



		<div class="grid gap" style="margin-top: 3em;">
			<div class="col-xs-12 col-md-8">
				<div class="card soft">
					<?= array_reduce($cart,'cartListTemplate') ?>
				</div>
			</div>
			
			
				<div class="col-xs-12 col-md-4 card soft" style="background-color: #f7f0eb;">
					<div class="card-section display-flex">
						<div class="flex-stretch">Sub Total</div>
						<div class="flex-none cart_subtotal">&dollar;1580</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch">Taxes</div>
						<div class="flex-none cart_subtotal">&dollar;200</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch">Total</div>
						<div class="flex-none cart_subtotal">&dollar;1780</div>
					</div>
				<div class="form-control addToCart" style="margin-top: 2em; margin-left: 10em;">
					<a href="product_checkout.php" class="form-button button_filled1">Check Out</a>
				</div>

			</div>

			
		
			
			
		</div>


			

	</div>

	<div class="back_button" style="margin: -12em 0 13em 75em;">
		
				
		<span><a href="product_list.php">Continue Shopping &#8640;</a></span>

		
	</div>

	<?php include "footer.php"; ?>

</body>
</html>	