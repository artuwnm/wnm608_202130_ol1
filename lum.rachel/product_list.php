
<?php

	include_once "lib/php/functions.php";
			include_once "parts/templates.php";

?>

<! DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
	

		<script src="lib/js/functions.js"></script>
		<script src="js/templates.js"></script>
		<script src="js/product_
		list.js"></script>
</head>
<body>

		<?php include "parts/navbar.php"; ?>


	<div class="container">
		
			<h2>Product List</h2>

			<div class="form-control">
				<form class="hotdog" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>

		<div class="form-control">
			<div class="display-flex flex-wrap">
			<div class="flex-stretch display-flex">
			<div class="flex-none">
			<div class="category-space">
					<button data-filter="category" data-value="" type ="button" class="form-button">All</button>
				</div>
			</div>


			<div class="category-space">
				<div class="flex-none">
					<button data-filter="category" data-value="eyes" type ="button" class="form-button">Eyes</button>
				</div>
		
			</div>



		<div class="category-space">
				<div class="flex-none">
					<button data-filter="category" data-value="hair" type ="button" class="form-button">Hair</button>
				</div>
	
			</div>



			<div class="category-space">
				<div class="flex-none">
					<button data-filter="category" data-value="face" type ="button" class="form-button">Face</button>
				</div>

			</div>
		</div>
	


			<div class="flex-none">
			<div class="form-select">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
					<option value="3">Least Expensive</option>
					<option value="4">Most Expensive</option>
				</select>
			</div>
	</div>
</div>
</div>



			<div class='productlist grid gap'></div>

	
		
			
		
	</div>




</body>
</html>