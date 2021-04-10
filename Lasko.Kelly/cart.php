<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<div class="card soft">
			<h2>Cart</h2>
			<!--ul>li*4>a[href="product_item.php"]>{Product $}-->
			<ul>
				<li><a href="product_item.php?id=1">Product 1</a></li>
				<li><a href="product_item.php?id=2">Product 2</a></li>
				<li><a href="product_item.php?id=3">Product 3</a></li>
				<li><a href="product_item.php?id=4">Product 4</a></li>
			</ul>
		</div>
	</div>

	<button>Checkout</button>





<?php include "parts/footer.php"; ?>
</body>
</html>