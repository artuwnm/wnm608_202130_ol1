<?php
include_once "lib/php/functions.php";

?>
<header class="navbar">
		<div class="display-flex">
			<div class="flex-none">
				<h1 class="name">Seamingly Easy Crafts</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav flex-none">
				<ul class="container display-flex">
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Store</a></li>
					<li><a href="product_cart.php">
						<span>Cart</span>
						<span class="badge"><?= makeCartBadge(); ?></span>
					</a></li>
          			<li><a href="styleguide/index.html">Style Guide</a></li>
				</ul>
			</nav>
		</div>	
	</header>