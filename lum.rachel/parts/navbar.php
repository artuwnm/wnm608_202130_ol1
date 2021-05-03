<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>
<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1><a href="index.php">LUX Beauty</a></h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>

					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Store</a></li>
					<li><a href="cart.php">
						<span>Cart</span>
						<span class="badge"><?= makeCartBadge(); ?></span>
						
					</a></li>
				</ul>
				
			</nav>	
		</div>

	</header>
	<hr>