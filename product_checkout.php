<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";
$cart = getCartItems();

?>

<!DOCTYPE html> <!-- html:5 -->

<html lang="en">
<head>
	<meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Product Checkout</title>


	<?php include "parts/meta.php"; ?>
</head>

<body style="background-color: white; padding: 0;">

	<div style="background-color: #e5c2c1; width: 100%; height: 2em;">
		
	</div>
	<?php include "parts/header_nav.php" ?> 

    <div class="container">

        <div class="back_but">
                 
            <div class="back_button" style="margin-top: 2em;">
                <a href="product_cart.php">&#8636;Back</a>
            </div>
                     
        </div>

        <div class="checkout_section">
            <div class="item_line" style="margin-top: 3em;">
                <h2>Checkout</h2>
            </div>
            <div class="divide_line1" style="margin-top: -1em;"></div>
        </div>
    </div>

	<div class="container grid gap" style="padding: 1em; margin-bottom: 12em; margin-top: 0em;">
		
		 <div class="col-xs-12 col-md-5">
            <div class="card soft" style="background-color: #f7f0eb;">
                <div class="card-section">
                    <h3>Item Review</h3>
                    <div style="margin-top: 1.5em;">
                        <?php
                        echo array_reduce($cart, function($r,$o){
                        
                            $totalfixed = number_format($o->total,2,'.','');
                            return $r."<div class='display-flex'>
                                <div class='flex-stretch itemreview_name'>$o->name</div>
                                <div class='flex-none checkout_price'>&dollar;$totalfixed</div>
                        
                            </div>";
                        
                        }) ?>
                    </div>
                </div>
                
                <div style="margin-bottom: 2em;"><?= cartTotals(); ?></div>

            </div>
        </div>
           
        
        <div class="col-xs-12 col-md-7 card soft" style="width: 100%;">    
            <div class="display-flex flex-column " style="margin-top: -4em; margin-left: -6em;">
                <div class="input_form flex-none payment_form">
                            <div class="default_form">
                                <h3 style="margin-top: 0em;">Credit Card</h3>
                
                        <form class="display-flex flex-column" style="margin-top: -2.5em;">
                            <div class="form-control flex-none">
                                <label class="default-lable">Name</label>
                                <input type="text" placeholder="Enter your name" class="default-input">
                            </div>
                            <div class="form-control flex-none">
                                <label class="default-lable">Card Number</label>
                                <input type="number" placeholder="xxxx xxxx xxxx xxxx" class="default-input">
                            </div>
                            <div class="form-control flex-none">
                                <label class="default-lable">Expiration</label>
                                <input type="text" placeholder="mm/yy" class="default-input">
                            </div>
                            <div class="form-control flex-none">
                                <label class="default-lable">CVV</label>
                                <input type="number" placeholder="xxx" class="default-input">
                            </div>

                            <div class="divide_line1 divide_line2 flex-none" style="margin-top: 4em;"></div>


                        </form>
                            </div>
                        </div>
                
                
                    <div class="input_form flex-none bill_form" style="margin-top: -2em;">
                        <div class="default_form">
                            <h3>Billing Address</h3>
                                                
                                <form style="margin-top: -1em;">
                                    <div class="form-control">
                                        <label class="default-lable">Street</label>
                                        <input type="text" placeholder="Enter street name" class="default-input">
                                    </div>
                                    <div class="form-control">
                                        <label class="default-lable">City</label>
                                        <input type="text" placeholder="Enter city" class="default-input">
                                    </div>
                                    <div class="form-control">
                                        <label class="default-lable">State</label>
                                        <input type="text" placeholder="Enter state" class="default-input">
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

                                <div class="flex-none payment_button" style=" margin-top: 4em;">
                
                                    <div class="back_button" style=" width: 12em;">
                                        <a href="product_confirmation.php" class="form-button button_filled1" style="color: white;">Payment</a>
                                    </div>

                                </div>

                      </div>
                        
                
                
                
                     
                
                     </div>
                        </div>
            </div>

</div> 




<?php include "footer.php"; ?>



</body>

</html> 