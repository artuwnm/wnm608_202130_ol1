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

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
	


</head>
<body>

<?php include "parts/navbar.php"; ?>

	<div class="container">	
		
			<h2>Product List</h2>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>

			<div class="form-control">
				<div class="card soft">
				<div class="display-flex flex-wrap">
					<div class="flex-stretch display-flex">
						<div class="flex-none">
						<button data-filter="category" data-value="" type="button" class="filter-button">All</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="reusable" type="button" class="filter-button">Reusable</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="sign" type="button" class="filter-button">Sign</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="supplies" type="button" class="filter-button">Supplies</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="tumbler" type="button" class="filter-button">Tumbler</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="coasters" type="button" class="filter-button">Coasters</button>
						</div>
							
					</div>
					<div class="flex-none">
						<div class="form-select">
							<select class="js-sort">
								<option value="1">Newest Arrivals</option>
								<option value="3">Price: Low to High</option>
								<option value="4">Price: High to Low</option>								
							</select>	
						</div>		
					</div>
				</div>		
				</div>
			</div>



			<div class='productlist grid gap'></div>



		</div>
	</div>
<?php include "parts/footer.php"; ?>
</body>
</html>