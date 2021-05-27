<?php 

	include_once "lib/php/functions.php";

	include_once "parts/templates.php";

	$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];

	//print_p($product);

	$images = explode(",", $product->images);

	$image_elements = array_reduce($images, function($r,$o){
		return $r."<img src='img/$o'>";

	});

//print_p($_SESSION);



?>



<!DOCTYPE html>  <!--html:5 -->

<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
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

	
	<div class="container individual_item" style="margin-bottom: 10em;">
		

		<div class="display-flex flex-column">
			<div class="back_button flex-stretch" style="margin-top: 3em;">
				<div class="back_but">
					<span>&#8636;</span> 
					<span><a href="store.php">Back</a></span>
				</div>
			</div>
			
			
			<div class="item_line flex-none">
				<div class="item_section">
					<h2>Item # <?= $_GET['id'] ?></h2>
					
					<div class="divide_line1" style="margin-top: -1.4em;"></div>
				</div>
			</div>
		</div>


		<div class="item_intro1">
			
			<div class="grid gap">
				<div class="col-xs-12 col-md-7 image_change" style="width: 70%;">
					<div class="figure card soft" >
						<div class="image-main">
							<img src="img/<?= $product->thumbnail ?>" alt="">
						</div>
						<div class= "image-thumbs display-flex flex-row">
							<?= $image_elements ?>
						</div>
				</div>
			</div>
					
					
			
			
				<div class="item_info1">
					<div class="item_form col-xs-12 col-md-5">
						<form method="post" action="cart_actions.php?action=add-to-cart">
						
							<input type="hidden" name="product-id" value="<?= $product->id ?>">
						
						    <div class="item_detail card soft">
							
								<ol style="list-style: none; margin-left: -2.6em;">
									<li class="item_name">
										<span class="item_bold">Name: </span>
										<span><?= $product->name ?></span>
									</li>
									<li class="item_price">
										<span class="item_bold">Price: </span>
										<span>&dollar;<?= $product->price ?></span>
								
									</li>
									<li class="item_category">
										<span class="item_bold">Category: </span>
										<span><?= $product->category ?></span>
								
									</li>
									<li>
										<label class="item_bold" for="product-amount">Quantity:</label>
										<div class="form-select1" style="width: 30%; margin-top: -0.01px;">
											<select id="product-amount" name="product-amount">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
										
									</li>
						
									<li>
								
										<label class="item_bold" for="product-size">Size:</label>
										<div class="form-select1" style="width:80%; margin-top: -0.01px;">
											<select id="product-size" name="product-size">
												<option>None</option>
												<option>Bracelet 5.0-5.5in</option>
												<option>Bracelet 5.5-6.5in</option>
												<option>Bracelet 6.5-7.0in</option>
												<option>Necklace 16in</option>
												<option>Necklace 18in</option>
												<option>Ring size 5</option>
												<option>Ring size 6</option>
												<option>Ring size 7</option>
												<option>Ring size 8</option>
												<option>Ring size 9</option>
											
											</select>
										</div>
										
									</li>
									
								</ol>
							
						
										
						
						<div style="margin-top: -0.5em;">
								<div class="item_bold">Description</div>
								<p style="margin-top: -0.05px;"><?= $product->description ?></p>
						</div>
											
						<div class="form-control addToCart" style="margin-bottom: 2em;">
							<input type="submit" class="form-button button_filled1" value="Add To Cart">
						</div>
					</div>
					</form>
					
				</div>
			</div>
				
				
		</div>
			

</div>

		<div class="item_line" style="margin-top: 3em;">
			<h3 class="recommended">Recommended</h3>
			
			<div class="divide_line1" style="margin-top: -1.2em; margin-bottom: 3em;"></div>
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





		<div class="container recommend_item" style="margin-left: 3em;">

			<?php
				recommendedSimilar($product->category,$product->id);

			?>

			<!--

			<?php

				//recommendedCategory("bracelet");
			?>


			<?php

			//$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='bracelet' ORDER BY 'date_create' DESC LIMIT 3");

			//recommendedProducts($result);


			?>

			<?php 
			
			//include_once "lib/php/functions.php";    //once means just one-time called
			
			//include_once "parts/templates.php";
			
			//$result = makeQuery(
				//makeConn(),
				//"
				//SELECT *                     /*`id`,`title`,`price`*/
			
				//FROM `products`
			
				//ORDER BY 'date_create' DESC  /*ASC*/
			
				//LIMIT 3
				//"
			//);
			
			//echo "<div class='grid gap'>", array_reduce($result, 'productListTemplate'),"</div>";
			
			?>-->





		</div>



	

</div>



	<?php include "footer.php"; ?>



</body>
</html>