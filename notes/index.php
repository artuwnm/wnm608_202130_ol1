<?php

include_once "../lib/php/functions.php";
include_once "../parts/templates.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Landing Page</title>

	<meta name="viewport" content="width=device-width">

	<?php include "../parts/meta.php"; ?>

</head>
<body class="flush">
	
	<?php include "../parts/navbar.php"; ?>


	<div class="container">
		
			<div class="view-window" style="background-image: url('img/main.jpg');">
					<div class="title-center"></div>
			</div>
		
		
			<div class="col-xs-12 col-md-3">
				
					<h2>New Product</h2>
			

				
				<?php 

				include_once "../lib/php/functions.php";
				include_once "../parts/templates.php";
				$result = makeQuery(
				 	makeConn(),
					"
					SELECT *
					FROM `products`
					ORDER BY `date_create` DESC
					LIMIT 3
					"
				);

				echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

				?>
			</div>	
	
		


			
		
	</div>






</body>
</html>