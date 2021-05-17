<?php

include "../lib/php/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>Product Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>

<body>
	
	<header class="navbar flex-align-center">
		<div class="container display-flex ">
			<div class="flex-none">
				<h1>Product Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</li>

				</ul>
			</nav>
		</div>
	</header>

	<div class="container">


		<?php

if (isset($_GET['id'])) {
	// showProductPage($_GET['id'] == "new" ? $empty_user : $users->users[$_GET['id']]);
} else {
	?>

<h2>Product List</h2>

	<!-- <?php
	$r = makeQuery(makeConn(), "SELECT * FROM `products`");
	echo array_reduce($result,function($r,$o){
		return $r."<div><a href='{$_SERVER['PHP_SELF']}?id=$o->id'>$o->name</a></div>";
	
});
}
?> -->
	</div>

</body>