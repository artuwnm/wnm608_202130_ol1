<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();

//$images = explode(",",$product->images);

//$image_elements = array_reduce($images,function($r,$o){return $r."<img src='img/$o'>";});



//print_p($product);

$cart = getCart();



?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart Page</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h2>In Your Cart</h2>

		<?php

		if(count($cart)) {
			?>
			<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?=array_reduce(getCartItems(),'cartListTemplate')
					?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<?= cartTotals() ?>

				<div class="card-section center">
					<a href="product_checkout.php" class=" form-button">Check Out</a>
				</div>


					</div>
				</div>
			</div>
		</div>
		<?php

		} else{
			?>
			<div class="card soft">
				<p>No items in cart</p>

			</div>

			<h3>Other Recommendations</h3>
			<?php recommendedAnything(6); ?>

			<?php
		}
		?>

	</div>

	






</body>
</html>