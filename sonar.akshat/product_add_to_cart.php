<?php

include_once "php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);
    
?><html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cart Page</title>

    <?php include "parts/meta.php"; ?>
    <style>
		body {background-image: url('img/balloons.svg'); background-repeat: no-repeat;width: 100%; background-position: center;}
	</style>
</head>

<body>
	
	<?php include "parts/navbar.php"; ?>

	<h1 class="h1">You added <?= $product->name ?> to your cart</h1>

	<div class="addpro">
	<div class="addedproduct">
		<p style="margin: 0px;">There are now <strong><?= $cart_product->amount ?></strong> of <strong><?= $product->name ?></strong> in your cart. </p>
	</div></div>

	<div class="btns2">	
		<button class="shopbtn" onclick="location.href='store.php'">Continue Shopping</button> 
		<button class="cartbtn" onclick="location.href='cart.php'">Go to Cart</button> 
	</div>


</body>
</html>