<?

		include_once "lib/php/functions.php";   
		include_once "parts/templates.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<meta name="viewport" content="width=device-width">	
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">	

			<h2>Product List</h2>


		<?php 



		$result = makeQuery(
			makeConn(),
			"
			SELECT * 
			FROM `products`
			ORDER BY 'date_create' DESC 
			LIMIT 12
			"
		);

		echo "<div class='grid gap'>", array_reduce($result, 'productListTemplate'),"</div>";

		?>

		</div>
	</div>

</body>
</html>




