<?php 



include_once "lib/php/functions.php";

?>





<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>NON-STOP</h1>
			</div>

		
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
			<ul class="container display-flex">
				<!-- li*3>a[href=#]>{Link $} -->
				<li><a href="notes/index.php">Discover</a></li>
					<li><a href="product_list.php">All</a></li>
					<li><a href="notes/timeline.php">Timeline</a></li>
					<li><a href="product_cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
			</ul>
			
					
					
			</nav>
		</div>
	</header>