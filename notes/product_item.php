<?php 

include_once "../lib/php/functions.php";
include_once "../parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` =".$_GET['id'])[0];


$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r. "<img src='img/thumbnail/$o'>";
});

//print_p($_SESSION);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<meta name="viewport" content="width=device-width">

	<?php include "../parts/meta.php"; ?>

	<script src="js/product_thumbs.js"></script>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>


	<div class="container">
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<div class="card soft">

						<div class="images-main">
							<img src="img/thumbnail/<?= $product->thumbnail ?>">
						</div>

						<div class="images-thumbs">
							<?= $image_elements ?>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-5">
					<form class="card medium" method="post" action="notes/cart_actions.php?action=add-to-cart">

						<input type="hidden" name="product-id" value="<?= $product->id ?>">

							<div class="card-section2">
								<div class="product-name"><?= $product->name ?></div>
								<div class="product-price">&dollar;<?= $product->price ?></div>
							</div>
						

							<div class="card-section2">
									<label for="product-amount" class="form-label">Amount</label>
									<div class="form-select" id="product-amount">
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

							<div class="card-section2">
								<label for="product-color" class="form-label">Color</label>
								<div class="form-select">
									<select id="product-color" name="product-color">
										<option>1.5oz</option>
										<option>2.5oz</option>
									</select>
								</div>
							</div>

						<div class="card-section2">
							<input type="submit" class="form-button" value="Add To Cart">
							<br><br>
							<div class="line"></div>
							<p><?= $product->description ?></p>
						</div>
					</form>
				</div>
			</div>
			
		
	</div>




</body>
</html>