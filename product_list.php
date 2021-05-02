<?php 

include_once "lib/php/functions.php";    //once means just one-time called

include_once "parts/templates.php";

?>

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

	<div class="container shop" style="margin-top: -1em;">
		
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
		

		

	<div class="grid_container">
		<?php 

		$result = makeQuery(
			makeConn(),
			"
			SELECT *                     /*`id`,`title`,`price`*/

			FROM `products`

			ORDER BY 'date_create' DESC  /*ASC*/

			LIMIT 12
			"
		);

		echo "<div class='grid gap'>", array_reduce($result, 'productListTemplate'),"</div>";

		?>

	</div>


		<div class="admin" style="margin-bottom: 15em;">
			<h3>
				<a href="#" >Product Admin</a>
			</h3>
		</div>

	</div>





	<?php include "footer.php"; ?>
	



</body>
</html>