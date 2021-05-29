<?php

include_once "../lib/php/functions.php";



?>

<input type="checkbox" id="menu" class="hidden">
<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1><a href="notes/index.php" class="logo">
					Lylical Fragrances
				</a></h1>
			</div>
			<div class="flex-stretch"></div>
			<div class="flex-none menu-button">
				<label for="menu">&equiv;</label>
			</div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="notes/product_list.php">shop</a></li>
					
					<!--<li><a href="notes/login.php">login</a></li>-->
					<li><a href="notes/cart.php">
					<span>cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
					</a></li>
				</ul>
			</nav>
		</div>
</header>