<!DOCTYPE html> <!-- html:5 -->

<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product List</title>


	<?php include "parts/meta.php"; ?>
</head>

<body style="background-color: white; padding: 0;">

	<div style="background-color: #e5c2c1; width: 100%; height: 2em;">
		
	</div>
	<?php include "parts/header_nav.php" ?>

	<div class="container shop">
		
		<h1>Shop</h1>

		<div class="back_button">
			<a href="#">
				<span>&#8636;</span> 
				<span><a href="landing_page.php">Back</a></span>
			</a>
		</div>

		<div class="form_bar">
			
			<div class="form-select select_left">
				<select>
					<option>All</option>
					<option>Earing</option>
					<option>Ring</option>
					<option>Necklace</option>
					<option>Bracelet</option>
				</select>
			</div>


			<div class="form-control">
				<form class="hotdog search_right">
					<span class="search_icon"><img src="img/search_icon.png"></span>
					<input type="search" placeholder="Search">
				</form>
			</div>

		</div>

		<div class="all_line">
			<h3>All</h3>
			
			<div class="divide_line1"></div>
		</div>

	</div>

	<div class="container product_container">
		<div class="grid gap product_grid1">
				<div class="col-xs-12 col-md-4" >

					<a href="product_item.php?id=1">
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name #1</div>
								<div class="product_price">$200</div>
							</figcaption>
						</figure>
					</a>

				</div>

				
				<div class="col-xs-12 col-md-4" >
					<a href="product_item.php?id=2">
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name #2</div>
								<div class="product_price">$80</div>
							</figcaption>
						</figure>
					</a>
				</div>
				

				
				<div class="col-xs-12 col-md-4" >
					<a href="product_item.php?id=3">
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name #3</div>
								<div class="product_price">$150</div>
							</figcaption>
						</figure>
					</a>
				</div>
			

				
				<div class="col-xs-12 col-md-4" >
					<a href="product_item.php?id=4">
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name #4</div>
								<div class="product_price">$200</div>
							</figcaption>
						</figure>
					</a>
				</div>
			

				
				<div class="col-xs-12 col-md-4" >
					<a href="product_item.php?id=5">
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name #5</div>
								<div class="product_price">$80</div>
							</figcaption>
						</figure>
					</a>
				</div>
				

				
				<div class="col-xs-12 col-md-4" >
					<a href="product_item.php?id=6">
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name #6</div>
								<div class="product_price">$150</div>
							</figcaption>
						</figure>
					</a>

				</div>
				

				
				<div class="col-xs-12 col-md-4" >
					<a href="product_item.php?id=7">
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name #7</div>
								<div class="product_price">$200</div>
							</figcaption>
						</figure>
					</a>
				</div>
				

				
				<div class="col-xs-12 col-md-4" >
					<a href="product_item.php?id=8">
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name #8</div>
								<div class="product_price">$80</div>
							</figcaption>
						</figure>
					</a>
				</div>
				

				
				<div class="col-xs-12 col-md-4" >
					<a href="product_item.php?id=9">
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name #9</div>
								<div class="product_price">$150</div>
							</figcaption>
						</figure>
					</a>
				</div>
				


				
				<div class="col-xs-12 col-md-4" >
					<a href="product_item.php?id=10">
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name #10</div>
								<div class="product_price">$200</div>
							</figcaption>
						</figure>
					</a>
				</div>
				

				
				<div class="col-xs-12 col-md-4" >
					<a href="product_item.php?id=11">
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name #11</div>
								<div class="product_price">$80</div>
							</figcaption>
						</figure>
					</a>
				</div>
				

				
				<div class="col-xs-12 col-md-4" >
					<a href="product_item.php?id=12">
						<figure class="figure product">
							<img src="img/placeholder400.png" alt="">
							<figcaption>
								<div class="product_name">Product Name #12</div>
								<div class="product_price">$150</div>
							</figcaption>
						</figure>
					</a>
				</div>
				

			</div>

		<div class="admin" style="margin-bottom: 15em;">
			<h3>
				<a href="#" >Product Admin</a>
			</h3>
		</div>
	</div>


	<div class="footer">
		<p>WNM618 - Final Project - Mindy Quan</p>
	</div>

	



</body>
</html>