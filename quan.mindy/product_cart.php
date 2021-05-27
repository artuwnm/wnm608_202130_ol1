<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (2,6,12)");

	//print_p(getCartItems());

	$cart = getCart();

	
?>

<!DOCTYPE html>  <!--html:5 -->

<html lang="en">
<head>
	<meta charset="UTF-8">

	
	
	<title>Shopping Cart</title>

	<?php include "parts/meta.php"; ?>


</head>

<body style="background-color: white; padding: 0;">

	<div style="background-color: #e5c2c1; width: 100%; height: 2em;">
		
	</div>
	<?php include "parts/header_nav.php"; ?>


	<div class="container individual_item" style="margin-bottom: 10em;">
		
		<div class="product_cart">
			<div class="item_line" style="margin-top: 2.5em;">
				<h2>Shopping Cart</h2>
			</div>
			<div class="divide_line1" style="margin-top: -1em;"></div>
		</div>

		<?php

		if(count($cart)) {

			?>
			<div class="grid gap container display-flex" style="margin-top: 1em;">
				
					<div class="col-xs-12 col-md-8">
						<div class="card soft">
							<div class="cart_info"><?= array_reduce(getCartItems(),'cartListTemplate') ?></div>
						</div>
					</div>
								
								
					<div class="col-xs-12 col-md-4 card soft" style="background-color: #f7f0eb;">
						<?= cartTotals() ?>	
						<div class="form-control addToCart" style="margin-top: 2em; ">
							<a href="product_checkout.php" class="form-button button_filled1">Check Out</a>
						</div>
					
					</div>
				
			
			</div>

			<?php
		}else {

			?>
			<div class="card soft" style="margin-bottom: 3em; margin-top: 1em;">
				<p class="no_items">No Items In Cart</p>
			</div>
			<h2 style="font-size: 26px;">Other Recommendations</h2>

			<div class="divide_line1" style="margin-top: -1em;"></div>
            
            <div style="margin-left: 3em; margin-top: 1em;">
            	<?php recommendedAnything(6); ?>
            </div>
			

			

			<?php
		}

		?>



		<div class="back_button" style="margin-top: 2em; text-align: right;">
		
				
			<span><a href="product_list.php">Continue Shopping &#8640;</a></span>

		
		</div>
		
	</div>




	

	<?php include "footer.php"; ?>

</body>
</html>	