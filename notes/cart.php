<?php 

include_once "../lib/php/functions.php";

include_once "../parts/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");


$cart = getCart();


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart Page</title>

	<meta name="viewport" content="width=device-width">

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>

	<div class="container card medium">
		<div class=""><h2>YOUR CART</h2></div>
		

		<?php

		if(count($cart)) {
			?>

			<div class="grid gap">

				<div class="col-xs-12 col-md-6">
					<div class="card dark">
						<?= array_reduce(getCartItems(),'cartListTemplate') ?>
					</div>
				</div>

				<div class="col-xs-12 col-md-5">
					<div class="card medium">
						<?= cartTotals() ?>
					</div>
				
					<div class="card medium">
							<a href="notes/product_checkout.php" class="form-button-etc">Checkout</a>
					</div>
				</div>
			</div>
			<?php
		} else {
			?>
				<div class="card soft">
					<p>No items in cart</p>
				</div>
				<div class="line"></div>
					<div class="product-name">New Items</div>
					<div class="col-xs-12 col-md-3">
					<?php 

					include_once "../lib/php/functions.php";
					include_once "../parts/templates.php";
					$result = makeQuery(
					 	makeConn(),
						"
						SELECT *
						FROM `products`
						ORDER BY `date_create` DESC
						LIMIT 3
						"
					);

					echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

					?>
				</div>
			
			<?php
		}
		?>
		
		
	</div>


</body>
</html>