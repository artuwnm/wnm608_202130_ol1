<?php 

include_once "lib/php/functions.php";

	$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

	$cart_product = cartItemById($_GET['id']);



?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, <!-- initial-scale=1.0 -->">
		
		<title>Confirmation Page</title>
<!-- META INFO -->
		<?php include "parts/meta.php"; ?>
</head>

<body>
	<?php include "parts/navbar.php"; ?>



<div class="container">
	<div class="card soft">
		<h3 id="product-cart">You have added <?= $product->name ?> added to the cart</h3>
		<!-- <p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p> -->
		<br>
<div class="display-flex">
		<div class="flex-none"><a href="product_list.php">Continue shopping</a></div>
		<div class="flex-stretch"></div>
		<div class="flex-none"><a href="cart.php">Go to cart</a></div>

</div>
		
		
	</div>
</div>










</body>
</html>
