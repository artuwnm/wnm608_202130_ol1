<?php 
include_once "lib/php/functions.php"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="view-window" style="background-image: url('img/gc2.jpg')">
	</div>


	<div class="container">
		<h2>Product List</h2>
	
		<?php

		include_once "lib/php/functions.php";
		include_once "parts/templates.php";

		$result = makeQuery(
			makeConn(),
			"
			SELECT * 
			FROM `products`
			ORDER BY `date_created` DESC
			LIMIT 12
			"
		);

		echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";


		?>
	</div>




	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="card-section">
						<form>
							<div class="form-control">
								<label for="#" class="form-label">Email Address</label>
								<input type="text" placeholder="Enter Your Email Address Here" class="form-input">
							</div>
						</form>
						<a href="#" class="form-button">Subscribe To Our Newsletter</a>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<?php include "parts/footer.php"; ?>
</body>
</html>