<?php 
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

?>
<?php include "parts/meta.php"; ?>

<script src="lib/js/functions.js"></script>
<script src="js/templates.js"></script>
<script src="js/product_list.js"></script>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, <!-- initial-scale=1.0 -->">
<title>Product List</title>





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
<div class="display-flex">
	<div class="flex-stretch display-flex">

	<div class="flex-none">
		<button data-filter="category" data-value="" type="button" class="form-button">All</button>
	</div>
	<div class="flex-none">
		<button data-filter="category" data-value="moisturizer" type="button" class="form-button">Moisturizer</button>
	</div>
	<div class="flex-none">
		<button data-filter="category" data-value="serum" type="button" class="form-button">Serum</button>
	</div>

	<div class="flex-none">
		<button data-filter="category" data-value="body_cream" type="button" class="form-button">Body Cream</button>
	</div>
	<div class="flex-none">
		<button data-filter="category" data-value="toner" type="button" class="form-button">Toner</button>
	</div>
	<div class="flex-none">
		<button data-filter="category" data-value="face_mask" type="button" class="form-button">Face Mask</button>
	</div>

	<!-- <div class="flex-none">
		<button data-filter="category" data-value="lip_balm" type="button" class="form-button">Lip Balm</button>
	</div> -->

</div>

	<div class="form-select">
    	<select class="js-sort">
        	<option value="1">Newest</option>
			<option value="2">Oldest</option>
			<option value="3">Price High to Low</option>
			<option value="4">Price Low to High</option>
    	</select>
	</div>
</div>
</div>
</div>




<div class='productlist grid gap'></div>
</div>















</div>

</body>
</html>