<?php 

include_once "lib/php/functions.php";

?>

<input type="checkbox" id="menu" class="hidden">

<header class="container display-flex header_container" style="margin-bottom: 0; margin-top: 0;">
    		

			
				
					<div class="logo1 flex-none">
						<img src="img/store_logo.png" alt="">
					</div>
							
					<div class="flex-stretch"></div>

					<div class="menu-button flex-none">
						<label for="menu">&equiv;</label>
					</div>	

					<div class="nav nav-flex flex-none">

						<!--nav.nav>ul>li*4>a[href=#]>{link $}-->
						<nav class="navigation_box">
							<ul>
							    <li><a href="index.php">Home</a></li>
						        <li><a href="product_list.php">Store</a></li>
						        <li><a href="about_us.php">About</a></li>
						        <li><a href="product_cart.php">
						        	<span>Cart</span>
						        	<span class="badge"><?= makeCartBadge(); ?></span>
						        </a></li>
							</ul>
						</nav>
					</div>
				

</header>

					
	