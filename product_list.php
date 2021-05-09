<?php 


include_once "lib/php/functions.php";
include_once "parts/templates.php";


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>



	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>



	

	<div class="container">

			<h1 class="center">PRODUCT LIST</h1>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>

			<div class="form-control">
				<div class="card soft">
					<div class="display-flex">
						<div class="flex-stretch display-flex">
							<div class="flex-none">
								<button data-filter="category" data-value="" type="button" class="form-button">All</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="furniture" type="button" class="form-button">Furniture</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="light fixture" type="button" class="form-button">Light Fixture</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="accessories" type="button" class="form-button">Accessories</button>
							</div>
						</div>
					<div class="flex-none">
						<div class="form-select">
							<select class="js-sort">
								<option value="1">Newest</option>
								<option value="2">Oldest</option>
								<option value="1">Least Expensive</option>
								<option value="1">Most Expensive</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class='productlist grid gap'></div>


			
		</div>
	</div>

	<div class="container">
	<div class="view-window" style="background-image: url('img/img 4.png');">
		<h3 class="center">Contact Infomation</h3>
		<div class="form-control center"><a href="#" class="form-button">Join Us</a></div>
	</div>
</div>






</body>
</html>