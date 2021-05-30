<?php 
 
    include_once "lib/php/functions.php";
    include_once "parts/templates.php";

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
	<div>
		 <?=
		<<<HTML
	<p id="product-cart">You have added <strong>$product->brand_name</strong> - <strong>$product->name</strong> to the cart.</p>
HTML;
?> 
		<!-- <p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p> -->
		<br>
<div class="display-flex">
		<div class="flex-none"><a href="product_list.php">Continue shopping</a></div>
		<div class="flex-stretch"></div>
		<div class="flex-none"><a href="cart.php">Go to cart</a></div>

</div>






		</div>
		<div class="container">
			<h2 class="recommendedProducts">You might also like</h2>
    <?php 
$result = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `category`='serum' ORDER BY `date_create` DESC LIMIT 3");

recommendedProducts($result);


    ?>
</div>

		
	
</div>










</body>
</html>
