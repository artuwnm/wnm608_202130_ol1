<?php

include_once "lib/php/functions.php";
//include_once "parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<p><a href="product_item.php?id=<?= $_GET['id'] ?>">Back</a></p>
	</div>



	<div class="container">
		<div class="card soft">
			

			<h2>You added <?= $product->name ?> to your cart</h2>
				<div class="display-flex">

					<div class="flex-none"><h3><a href="product_list.php">Keep Shopping</a></h3></div>
					<div class="flex-stretch"></div>
					<div class="flex-none"><h3><a href="cart.php">View Cart</a></h3></div>
			</div>
		</div>
	</div>


</body>
</html>