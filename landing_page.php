<!DOCTYPE html> <!-- html:5 -->

<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Landing Page</title>


	<?php include "parts/meta.php"; ?>
</head>

<body style="background-color: white; padding: 0;">

	<div style="background-color: #e5c2c1; width: 100%; height: 2em;">
		
	</div>
	<?php include "parts/header_nav.php" ?>


    <!-- banner -->
	<div class="display-flex banner">
		
			<img class="banner_img" src="img/placeholder_img2-1.png">
			<div class="announce">
				<h2 class="announce_title">SHOP TODAY</h2>
				<p class="announce_content">Lorem ipsum, dolor, sit amet consectetur adipisicing elit.</p>
			</div>
			
	</div>


	<!-- Collection -->
	<div class="generation_intro display-flex">
		<h1 class="generation_title">Jewelry For Every Generation</h1>
		<div class="generation_content display-flex">
			<div class="generation_text card soft">
				<img src="img/placeholder_img1-1.png">
				<h2>Product 1</h2>
				<p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Magnam architecto explicabo vitae possimus! Maiores suscipit doloremque dolore quae, ipsa soluta eveniet.</p>
			</div>
			<div class="generation_text card soft">
				<img src="img/placeholder_img1-1.png">
				<h2>Product 2</h2>
				<p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Magnam architecto explicabo vitae possimus! Maiores suscipit doloremque dolore quae, ipsa soluta eveniet.</p>
			</div>
			<div class="generation_text card soft">
				<img src="img/placeholder_img1-1.png">
				<h2>Product 3</h2>
				<p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Magnam architecto explicabo vitae possimus! Maiores suscipit doloremque dolore quae, ipsa soluta eveniet.</p>
			</div>
			
		</div>
	</div>




	<!-- View Window -->
	<div class="view-window" style="background-image: url('img/placeholder_img2-1.png');">
		<div class="collection_text">
			<h1>Our Collection</h1>
			<p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Magnam architecto explicabo vitae possimus! Maiores suscipit doloremque dolore quae, ipsa soluta eveniet sapiente autem assumenda reprehenderit ut sed veniam obcaecati deserunt. Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Magnam architecto explicabo vitae possimus!</p>

		</div>
	</div>




	<!-- Intro Lab Gems -->

	<div class="container display-flex gem_intro">
		
		<div class="gem_text">
			<h1>Featured Design</h1>
			<p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Magnam architecto explicabo vitae possimus! Maiores suscipit doloremque dolore quae, ipsa soluta eveniet sapiente autem assumenda reprehenderit ut sed veniam obcaecati deserunt.</p>
		</div>

		<div class="gem_img">
			<img src="img/placeholder_img2-2.jpg">
		</div>
	</div>


	<div class="newsletter card">

		<div class="container display-flex">

			<div class="news_text flex-none">
				<h1>Subscribe To Our Newsletter</h1>
				<p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit.</p>
			</div>
			
			<div class="flex-stretch"></div>

			<div class="news_button flex-none">
				<form>
					<div class="form-control">
						<label class="default-lable1">Email</label>
						<input type="text" class="default-line1">
					</div>
				</form>	
				<div class="form-control joinUs">
					<button type="button" class="form-button button_filled1">Join Us</button>
				</div>

				
			</div>

		</div>
			
		
	</div>



</body>
</html>


