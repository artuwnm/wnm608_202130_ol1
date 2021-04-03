<!DOCTYPE html> <!-- html:5 -->

<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>
</head>

<body style="background-color: white; padding: 0;">

	<div style="background-color: #e5c2c1; width: 100%; height: 2em;">
		
	</div>
	<?php include "parts/header_nav.php"; ?>

	
	<div class="container individual_item" style="margin-bottom: 15em;">
		

		<div class="back_button" style="margin-top: 5em;">
			<a href="#" >
				<span>&#8636;</span> 
				<span>Back</span>
			</a>
		</div>


		<div class="item_line">
			<h2>Item # <?= $_GET['id'] ?></h2>
			
			<div class="divide_line1" style="margin-top: -1.4em;"></div>
		</div>


		<div class="item_intro">
			
			<div>
				<div class="item_img">
					<img src="img/placeholder400.png" style="width: 400px; height: 400px;" alt="">
				</div>
			</div>

			
				<div class="item_info" style="width: 35%; height: 400px; margin-left: 8em;">
					<div class="item_detail">
						<ol style="list-style: none; margin-left: -2.5em;">
							<li class="item_name">
								<span class="item_bold">Name: </span>
								<span>Lorem ipsum dolor sit</span>
							</li>
							<li class="item_price">
								<span class="item_bold">Price: </span>
								<span>$$$</span>
						
							</li>
							<li class="dimension_info">
								<span class="item_bold">Quantity: </span>
								<span>1</span>
							</li>
							
						</ol>
					</div>
				
					<div class="item_descrip">
						<h3>Description</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
					</div>
				
					<div class="form-control addToCart">
						<button type="button" class="form-button button_filled1">Add To Cart</button>
					</div>
				</div>
				
				
			</div>
			



		<div class="item_line">
			<h3>Recommended</h3>
			
			<div class="divide_line1" style="margin-top: -1.4em;"></div>
		</div>


		<div class="container product_container1">
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





	</div>


	<div class="footer">
		<p>WNM618 - Final Project - Mindy Quan</p>
	</div>




</body>
</html>