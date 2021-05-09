<?php

include_once "php/functions.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();
//print_p(getCartItems());
    
?><!DOCTYPE html>
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
    <?php include "parts/meta.php"; ?>
    <style>
    .checkbtn {
    display: inline-block;
    background: rgb(43,111,247);
    background: linear-gradient(90deg, rgba(43,111,247,1) 35%, rgba(44,35,247,1) 100%);
    border-width: 0;
    font-family: aktiv-grotesk,sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 18px;
    color: white;
    width: 500px;
    height: 50px;
    outline: 0;
    border-radius: 10px;
	}

	.checkbtn:hover {
		background: linear-gradient(270deg, rgba(43,111,247,1) 35%, rgba(44,35,247,1) 100%);
	}
		    </style>
</head>

<body>
	
	<?php include "parts/navbar.php"; ?>

	<div>
		<h1 style="padding-left: 0px;">My Cart</h1>
	</div>

	<div style="display: flex; justify-content: center; padding-top: 30px; padding-bottom: 30px;">
		<div style="box-shadow: 0 2px 20px rgba(0,0,0,0.2); border-radius: 10px;">
			<?= array_reduce($cart_items, 'cartListTemplate') ?>
		</div>

		<?= cartTotals() ?>
	</div>

	<div style="display: flex; justify-content: center;">
		<button class="checkbtn" onclick="location.href='checkout.php'">Checkout</button> 
	</div>

</body>
</html>