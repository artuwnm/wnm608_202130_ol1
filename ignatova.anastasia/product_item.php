
<?php 

		include_once "lib/php/functions.php";

		$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->IMAGES);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='$o'>";
});

// print_p($product);

?>

<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">

	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>

	<script src="js/product_thumbs.js"></script>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

<div class="container">
	<div class="grid gap">
		<div class="col-xs-12 col-md-7">
			<div class="card soft">

				<div class="images_main">
					<img src="<?= $product->thumbnail ?>">
				</div>

				<div class="images_thumbs">
					<?= $image_elements ?>
				</div>

			</div>
		</div>

		<div class="col-xs-12 col-md-5">
			<form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">

				<input type="hidden" name="product-id" value="<?= $product->id ?>">

				<div class="card-section">
				<h2 class="product-name"><?= $product->name ?></h2>
				</div>
				<div class="card-section">
					<div class="product-price">&dollar;<?= $product->price ?>
					</div>
				</div>

				<div class="card-section">
				<div>
						<p id="product-description"><?= $product->description ?></p>
					</div></div>


				<div class="card-section">
					<div class="form-control">
					<label for="product-amount" class="form-label">Amount</label>

					<div class="form-select">
    					<select id="product-amount" name="product-amount">
        					<option>1</option>
			       			<option>2</option>
        					<option>3</option>
        					<option>4</option>
       						<option>5</option>
        					<option>6</option>
        					<option>7</option>
        					<option>8</option>
       						<option>9</option>
        					<option>10</option>
    					</select>
					</div>
					</div>
				</div>

				<div  class="card-section">
					<div>
						<input type="submit" class="form-button" value="Add to Cart">


					<!-- <a href="product_added_to_cart.php?id=<?= $product->id ?>" class="form-button">Add to Cart</a> -->
					</div>
				</div>


			</form>
		</div>
	</div>		
</div>


















</body>
</html>