<?php 

include_once "lib/php/functions.php";

?>

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
	<div class="grid gap banner" style="margin-top: 2em;">
		
			<img class="banner_img col-xs-12 col-md-12" src="img/jewelry/banner1-8.png">
			<!--<div class="announce display-flex flex-column">
				<h2 class="announce_title">SHOP TODAY</h2>
				<p class="announce_content">M.Q Fine Jewelry design heirloom jewelry pieces for generations.</p>
			</div>-->
			
	</div>


	<!-- Collection -->
	<div class="generation_intro container display-flex flex-column">
		<h1 class="generation_title">Jewelry For Every Generation</h1>
		<div class="generation_content display-flex flex-column grid gap">
			<div class= "card soft col-xs-12 col-md-4">
				<div class="generation_text">
					<img src="img/jewelry/diamond_icon.png" style="width: 150px; height: 150px;">
					<h2>High-quality Diamond</h2>
					<p>Our fine jewelry is made of recycled 14 karat gold, conflict-free precious and semi-precious stones. We
				assure the responsible sourcing, unique design, and quality of in our store.</p>
			</div>
			</div>
			<div class="card soft col-xs-12 col-md-4">
				<div class="generation_text">
					<img src="img/jewelry/generation_icon.png" style="width: 150px; height: 150px;">
					<h2>Unique Design</h2>
					<p>In our store, you can find both manufactured and handmade fine jewelry pieces. Each piece is designed by professional jewelry designers, and we also welcome customized pieces.</p>
				</div>
			</div>
			<div class="card soft col-xs-12 col-md-4">
				<div class="generation_text">
					<img src="img/jewelry/design_icon.png" style="width: 150px; height: 150px;">
					<h2>Luxury Investment</h2>
					<p>Fine jewelry is an investment, so we want you to have it at a great price and delivered to your door. We breaking the rules of the jewelry world one finely-priced diamond at a time.</p>
				</div>
			</div>
			
		</div>
	</div>




	<!-- View Window -->
	<div class="view-window display-flex" style="background-image: url('img/jewelry/banner2-1.png');">

		<div class="collection_text">
			<h1>About Our Goal</h1>
			<p>The fine jewelry world has been intimidating, inaccessible, way overpriced, and frankly pretty outdated for too long. We knew we needed to break its rules to make a difference. Luxury today is collected, shared, and classic. We think jewelry should be too.</p>

		</div>
	</div>




	<!-- Intro Lab Gems -->

	<div class="container card light gem_intro">
		
		<div class="grid gap gem_info" style="padding: 1em;">
			<div class="gem_text col-xs-12 col-md-6">
				<h1>Natural Materials</h1>
				<p>Our jewelry pieces use natural materials, including stones, shells, and pearl. Our team is pushing the boundaries of innovative design and make affordable luxury products while staying true to our principles: color, shape, material, and value.  </p>
			</div>
			
			<div class="gem_img col-xs-12 col-md-6">
				<img src="img/jewelry/ring2_wear-1.png">
			</div>
		</div>
	</div>


	<div class="newsletter card">

		<div class="container newsletter_box display-flex">

			<div class="news_text flex-none">
				<h1>Subscribe To Our Newsletter</h1>
				<p>Start your experience today to make your own unique jewelry!</p>
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


