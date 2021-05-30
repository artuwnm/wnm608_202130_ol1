
<?php 



include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
	<title>Vintage Furniture</title>
</head>
<body class="flush">

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Vintage Furniture</h1>
			</div>
			<div class="flex-stretch"></div>
			
			
				<nav class="flex-none nav">
			<ul class="container display-flex">
				<!-- li*3>a[href=#]>{Link $} -->
				<li><a href="index.html">Home</a></li>
				<li><a href="product_list.php">Store</a></li>
				<li><a href="inspiration.php">Inspiration</a></li>
				<li><a href="product_cart.php">Cart</a></li>
			</ul>
				</nav>
		</div>
	</header>

	
	


	

	<div class="container">
		<div class="view-window" style="background-image: url('img/img 4.png');">
			
			
		</div>
		
	</div>





	<div class="container">
		<hr class="class1">
	<h3 class="center">DISCOVER OUR NEW CATALOGUES | 2021</h3>
		<hr>
	<div class="grid">
				<div class="col-xs-12 col-md-4">
					<div class="card">
						
						<div class="card soft">
							<a href="product_list.php"><img src="img/img 5.jpg" width="100%"></a>
						<div class="container-card">
						<h3 class="center">Furnitures</h4>
						</div>
						</div>
						</div>
					
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="card">
						<div class="card soft">
							<a href="product_list.php"><img src="img/img 6.jpg" width="100%"></a>

						<div class="container-card">
						<h3 class="center">Accessories</h4>
						</div>
						</div>
						</div>
					
						
					</div>

					<div class="col-xs-12 col-md-4">
					<div class="card">
						<div class="card soft">
							<a href="product_list.php"><img src="img/img 7.jpg" width="100%"></a>
						<div class="container-card">
						<h3 class="center">Light Fixtures</h4>
						</div>
						</div>
						</div>
					
						
					</div>
				</div>
				</div>
	</div>


	


</body>
<div class="container">
	<div class="view-window" style="background-image: url('img/img 4.png');">
		<h3 class="center">Contact Infomation</h3>
		<div class="form-control center"><a href="#" class="form-button">Join Us</a></div>
	</div>
</div>
</html>






			<div class="container">
			<h2>Latest Furniture</h2>
			<?php recommendedCategory("Furniture"); ?>
			</div>











