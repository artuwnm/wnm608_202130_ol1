<?php

include_once "../lib/php/functions.php";
include_once "../parts/templates.php";	

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shop</title>

	<meta name="viewport" content="width=device-width">

	<?php include "../parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
	
</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>

	<div class="container">
		<div class="card medium">
			<h2>PRODUCT LIST</h2>

			<div class="card medium form-control" style="float: right;">
				<form class="hotdog" id="product-search">
					<input type="search" placeholder="Search">
				</form>
			</div>
		
			
			<div class="form-control" style="clear: both;">
				<div class="card medium">
				<div class="display-flex flex-wrap">
					<div class="flex-stretch display-flex">
						<div class="flex-none">
							<button data-filter="category" data-value="" type="button" class="button-sm">All</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="fragrance1" type="button" class="button-sm">Morning</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="fragrance2" type="button" class="button-sm">Daytime</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="fragrance3" type="button" class="button-sm">Night</button>
						</div>
					</div>
					<div class="flex-none">
						<div class="form-select-sort">
							<select class="js-sort">
								<option value="1">Newest</option>
								<option value="2">Oldest</option>
								<option value="3">Price(low-high)</option>
								<option value="4">Price(high-low)</option>
								
							</select>
						</div>
					</div>
				</div>
				</div>
			</div>
		

			


			<div class='productlist grid gap'></div>
			
		</div>











	</div>

</body>
</html>