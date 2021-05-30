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
	<div class="card soft" style="margin-bottom: 0.4em;">
		<div class="display-flex flex-wrap">
			<div class="flex-stretch display-flex">

				<div class="flex-none text-padding-right" >
					<button data-filter="category" data-value="" type="button" class="form-button">All</button>
				</div>
				<div class="flex-none text-padding-right">
					<button data-filter="category" data-value="moisturizer" type="button" class="form-button">Moisturizer</button>
				</div>
				<div class="flex-none text-padding-right">
					<button data-filter="category" data-value="serum" type="button" class="form-button">Serum</button>
				</div>

				<div class="flex-none text-padding-right">
					<button data-filter="category" data-value="body_cream" type="button" class="form-button">Body Cream</button>
				</div>
				<div class="flex-none text-padding-right">
					<button data-filter="category" data-value="toner" type="button" class="form-button">Toner</button>
				</div>
				<div class="flex-none text-padding-right">
					<button data-filter="category" data-value="face_mask" type="button" class="form-button">Face Mask</button>
				</div>
			

			<div class="form-select flex-none" style="margin:.5em">
    			<select class="js-sort">
			<option value="0">Sort by</option>
        	<option value="1">Newest</option>
			<option value="2">Oldest</option>
			<option value="3">Price High to Low</option>
			<option value="4">Price Low to High</option>
    			</select>
			</div>

		</div>	

			<div class="form-control flex-none">
				<form class="hotdog medium" style="padding: 0.7em 2em;" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>

	</div>
	</div>

<div class='productlist grid gap'></div>

</div>

</body>
</html>