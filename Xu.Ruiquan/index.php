<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NON-STOP</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">

</head>

<body class="flush">

	<header class="navbar">
 		<div class="container display-flex">
 			<div class="flex-none">
 				<h1>NON-STOP</h1>
 			</div>
 				<div class="flex-stretch"></div>
 				
 				<nav class="flex-none nav">
 					<ul class="container display-flex">
 						<li><a href="index.php">Discover</a></li>
 						<li><a href="product_list.php">All</a></li>
 						<li><a href="product_cart.php">Cart</a></li>
 					</ul>
 				</nav>		
			</div>
	</header>	


	<div class="container">
		<div class="view-window" style="background-image: url('img/hero.jpg')">
	</div>
</div>

	<div class="container-card">
		<h2>Hot Shoes</h2>
	</div>


	<div class="container">
		<?php

		$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='shoes_lifestyle' ORDER BY `date_create` DESC LIMIT 6");

		recommendedProducts($result);

		?>
	</div>

</body>
<div class="container">
	<div class="view-window" style="background-image: url('img/sneakers.jpg');">
		<h3 class="center">Contact Information</h3>
		<div class="form-control center"><a href"#" class="form-button">Join Us</a></div>
	</div>
</div>
</html>

