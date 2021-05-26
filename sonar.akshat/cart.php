<?php

include_once "php/functions.php";
include_once "parts/templates.php";

$cart = getCart();

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();
//print_p(getCartItems());
    
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php"; ?>
	
	<title>Cart Page</title>

</head>

<body>
	
	<?php include "parts/navbar.php"; ?>

	<div>
		<h1 class="h1">My Cart</h1>
	</div>

	<?php 

	if(count($cart)) {
		?>
		<div style="display: flex; justify-content: center; padding-top: 30px; padding-bottom: 30px;">
		<div style="box-shadow: 0 2px 20px rgba(0,0,0,0.2); border-radius: 10px;">
			<?= array_reduce($cart_items, 'cartListTemplate') ?>
		</div>

		<?= cartTotals() ?>
	</div>

	<div style="display: flex; justify-content: center;">
		<button class="checkbtn" onclick="location.href='checkout.php'">Checkout</button> 
	</div>
		<?php
	} else {
		?>
		<div class="noitems"><a href="store.php"><div class="noitem"><img src="img/SVG/emptycart.svg" style="width: 120px; margin-right: auto; margin-left: auto;"><p class="noit">No items in Cart</p></div></a></div>
		<?php 
	}
	?>

	

	

</body>
</html>