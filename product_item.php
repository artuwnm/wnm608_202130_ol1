<?php 

	include_once "lib/php/functions.php";

	$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];

	//print_p($product);

	$images = explode(",", $product->images);

	$image_elements = array_reduce($images, function($r,$o){
		return $r."<img src='img/$o'>";

	});

?>



<!DOCTYPE html>  <!--html:5 -->

<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>

	<script src="js/product_thumbs.js"></script>

</head>

<body style="background-color: white; padding: 0;">

	<div style="background-color: #e5c2c1; width: 100%; height: 2em;">
		
	</div>
	<?php include "parts/header_nav.php"; ?>

	
	<div class="container individual_item" style="margin-bottom: 15em;">
		

		<div class="back_button" style="margin-top: 5em;">
			<a href="#" >
				<span>&#8636;</span> 
				<span><a href="product_list.php">Back</a></span>
			</a>
		</div>


		<div class="item_line">
			<h2>Item # <?= $_GET['id'] ?></h2>
			
			<div class="divide_line1" style="margin-top: -1.4em;"></div>
		</div>


		<div class="item_intro">
			
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="image-main">
						<img src="img/<?= $product->thumbnail ?>" alt="">
					</div>

					<div class="image-thumbs">
						<?= $image_elements ?>
					</div>
				</div>
			</div>

			
				<div class="item_info grid gap" style="margin-left: -14em;">
					<div class="item_detail col-xs-12 col-md-5">
						<ol style="list-style: none; margin-left: -2.7em;">
							<li class="item_name">
								<span class="item_bold">Name: </span>
								<span><?= $product->name ?></span>
							</li>
							<li class="item_price" style="margin-top: 0.6em;">
								<span class="item_bold">Price: </span>
								<span>&dollar;<?= $product->price ?></span>
						
							</li>
							<li style="margin-top: -0.3em;">
								<li>
									<span class="item_bold">Quantity: </span>
								</li>
								
								<span class="form-select1">
									<select style="width: 30%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</span>
							</li>
							
						</ol>
					</div>
				
					<div class="item_descrip" style="margin-top: -1.1em;">
						<h3>Description</h3>
						<p><?= $product->description ?></p>
					</div>
				
					<div class="form-control addToCart" style="margin-top: 0.6em;">
						<a href="product_added_to_cart.php?id=<?= $product->id ?>" class="form-button button_filled1">Add To Cart</a>
					</div>
				</div>
				
				
			</div>
			



		<div class="item_line">
			<h3>Recommended</h3>
			
			<div class="divide_line1" style="margin-top: -1.4em; margin-bottom: 3em;"></div>
		</div>


		<!--<div class="container product_container1">
			<div class="grid gap product_grid1">
					<div class="col-xs-12 col-md-4" >
			
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name</div>
								
							</figcaption>
						</figure>
			
					</div>
					<div class="col-xs-12 col-md-4" >
			
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name</div>
								
							</figcaption>
						</figure>
			
					</div>
					<div class="col-xs-12 col-md-4" >
			
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name</div>
								
							</figcaption>
						</figure>
			
					</div>
			</div>
		</div>
	-->



		<div style="margin-left: 3em;">
			<?php 
			
			include_once "lib/php/functions.php";    //once means just one-time called
			
			include_once "parts/templates.php";
			
			$result = makeQuery(
				makeConn(),
				"
				SELECT *                     /*`id`,`title`,`price`*/
			
				FROM `products`
			
				ORDER BY 'date_create' DESC  /*ASC*/
			
				LIMIT 3
				"
			);
			
			echo "<div class='grid gap'>", array_reduce($result, 'productListTemplate'),"</div>";
			
			?>
		</div>



	</div>


	<?php include "footer.php"; ?>



</body>
</html>