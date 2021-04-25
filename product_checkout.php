<!DOCTYPE html> <!-- html:5 -->

<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product Checkout</title>


	<?php include "parts/meta.php"; ?>
</head>

<body style="background-color: white; padding: 0;">

	<div style="background-color: #e5c2c1; width: 100%; height: 2em;">
		
	</div>
	<?php include "parts/header_nav.php" ?>

	<div class="container shop" style="margin-bottom: 12em;">
		
		<div class="item_line" style="margin-top: 7em;">
			<h2>Checkout</h2>
		</div>
		<div class="divide_line1" style="margin-top: -1em;"></div>

		<div class="input_form">
    		<div class="default_form" style="margin-top: -1em;">
    			<h3>Credit Card</h3>

				<form>
					<div class="form-control">
						<label class="default-lable">Name</label>
						<input type="text" placeholder="Enter your name" class="default-input">
					</div>
					<div class="form-control">
						<label class="default-lable">Card Number</label>
						<input type="number" placeholder="xxxx xxxx xxxx xxxx" class="default-input">
					</div>
					<div class="form-control">
						<label class="default-lable">Expiration</label>
						<input type="text" placeholder="mm/yy" class="default-input expiration">
					</div>
					<div class="form-control">
						<label class="default-lable">CVV</label>
						<input type="number" placeholder="xxx" class="default-input">
					</div>
				</form>
    		</div>
        </div>
  
    		

    <div class="divide_line1" style="margin-top:2em;"></div>

    <div class="input_form">
    	<div class="default_form" style="margin-top: -1em;">
    		<h3>Billing Address</h3>
    							
    			<form>
    				<div class="form-control">
    					<label class="default-lable">Street</label>
    					<input type="text" placeholder="Enter street name" class="default-input">
    				</div>
    				<div class="form-control">
    					<label class="default-lable">City</label>
    					<input type="text" placeholder="xxxx xxxx xxxx xxxx" class="default-input">
    				</div>
    				<div class="form-control">
    					<label class="default-lable">State</label>
    					<input type="text" placeholder="mm/yy" class="default-input expiration">
    				</div>
    				<div class="form-control">
    					<label class="default-lable">Country</label>
    					<input type="text" placeholder="Enter country" class="default-input">
    				</div>
    				<div class="form-control">
    					<label class="default-lable">Zip Code</label>
    					<input type="number" placeholder="Enter zip code" class="default-input">
    				</div>				
    			</form>
    	</div>
  	</div>
    	



 	<div class="display-flex" style="margin-top: 5em;">
 		<div class="back_button flex-none" style="margin">
 	
 						
 			<span><a href="product_list.php">Continue Shopping &#8640;</a></span>
 		
 		</div>

 		<div class="flex-stretch"></div>	
 		
 		<div class="back_button flex-none" style=" width: 12em;">
 			<a href="product_confirmation.php" class="form-button button_filled1" style="color: white;">Payment</a>
 		</div>

 	</div>

</div> 


<?php include "footer.php"; ?>



</body>

</html> 