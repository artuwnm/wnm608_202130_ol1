<?php 

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

//$images = explode(",",$product->images);

//$image_elements = array_reduce($images,function($r,$o){return $r."<img src='img/$o'>";});

//print_p($product);



?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	
	

	<div class="container">
		<div class="card soft">
			<h2>You added <?= $product->name ?> to our cart</h2>
			<p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p>

			<div class="display-flex">
				<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
				<div class="flex-stretch"><a href="product_list.php"></a></div>
				<div class="flex-none"><a href="product_cart.php">Go To Cart</a></div>			
			</div>

		</div>
	</div>






</body>
</html>