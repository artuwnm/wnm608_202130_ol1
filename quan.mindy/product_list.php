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

	<script src="lib/js/functions.js"></script>

	<script src="js/templates.js"></script>

	<script src="js/product_list.js"></script>

	

</head>

<body style="background-color: white; padding: 0;">

	<div>
		<div style="background-color: #e5c2c1; width:100%; height: 2em;"></div>
		
	</div>
		
	
	<?php include "parts/header_nav.php" ?>
   
	
		<div class="container shop" style="margin-top: -1em;">
			
			<h1>Shop</h1>
		
			<div class="search_row">
				<div class="form_bar display-flex" style="margin-top: 4em;">
						
					<div class="form-control flex-none" style="margin-top: 0.2em;">
						<form class="hotdog search_right1" id=product-search>
							<span class="search_icon"><img src="img/search_icon.png"></span>
							<input type="search" placeholder="Search" class="search_text">
						</form>
					</div>
					<div class="flex-stretch"></div>
						
					<div class="back_button2 flex-none">
						<div>
							<span>&#8636;</span> 
							<span><a href="index.php">Back</a></span>
						</div>
					</div>
						
				</div>
			</div>
		
			<div class="filter_section">
				<div class="all_line display-flex filter_bar">
					<div class="form-control flex-none ">
							<div class="display-flex">
								<div class="flex-none filter_button" style="margin-right: 1em;">
									<button data-filter="category" data-value="" type="button" class="form-button button_filled3"><div class="filter_click">All</div></button>
								</div>
								<div class="flex-none filter_button" style="margin-right: 1em;">
									<button data-filter="category" data-value="bracelet" type="button" class="form-button button_filled3"><div class="filter_click">Bracelet</div></button>
								</div>
								<div class="flex-none filter_button" style="margin-right: 1em;">
									<button data-filter="category" data-value="earring" type="button" class="form-button button_filled3"><div class="filter_click">Earring</div></button>
								</div>
								<div class="flex-none filter_button" style="margin-right: 1em;">
									<button data-filter="category" data-value="necklace" type="button" class="form-button button_filled3"><div class="filter_click">Necklace</div></button>
								</div>
								<div class="flex-none filter_button" style="margin-right: 1em;">
									<button data-filter="category" data-value="ring" type="button" class="form-button button_filled3"><div class="filter_click">Ring</div></button>
								</div>
							</div>
					</div>	
						
					<div class="flex-stretch"></div>
						
					<div class="flex-none">
						<div class="form-select sort_select" style="margin-top: 1.8em;">
							<select class="js-sort" style="width: 12em;">
								<option value="1">New Arrival</option>
								<option value="2">Classical Piece</option>
								<option value="3">Least Expensive</option>
								<option value="4">Most Expensive</option>
							</select>
						</div>
					</div>
					
						</div>
						
						<div class="divide_line1" style="margin-top: 1em;"></div>
			</div>
		
		</div>
		
		
		
		
		<div class="container product_container">
		
		
			<div class="grid_container">
				<div class='productlist grid gap'></div>
		
			</div>
		
		
			<!--<div class="admin" style="margin-bottom: 15em;">
				<h3>
					<a href="#" >Product Admin</a>
				</h3>
			</div>-->
		
		</div>
	





	<?php include "footer.php"; ?>



</body>
</html>