<?php 

include_once "lib/php/functions.php";

?>



<header class="container header_container diaplay-flex" style="margin-bottom: 0; margin-top: 0;">
    		

			<div class="header_bottom flex-stretch navigation1">
				<div class="logo" >
					<img src="img/store_logo.png" alt="">
				</div>
			<div>

			<div class="flex-stretch"></div>
					
					<!--nav.nav>ul>li*4>a[href=#]>{link $}-->
			        <nav class="nav nav-flex flex-none navigation_real">
				        <ul>
					        <li style="margin: 0 1em 0 1em;"><a href="index.php">Home</a></li>
					        <li style="margin: 0 1em 0 1em;"><a href="product_list.php">Store</a></li>
					        <li style="margin: 0 1em 0 1em;"><a href="about_us.php">About</a></li>
					        <li style="margin: 0 1em 0 1em; width: 5em;"><a href="product_cart.php">
					        	<span>Cart</span>
					        	<span class="badge"><?= makeCartBadge(); ?></span>
					        </a></li>
				        </ul>
			        </nav>

					
			
				
		
		
		

    </header>

					
	