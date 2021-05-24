<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


resetCart();

?>


<! DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Confirmation Page</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<!--<div style="text-align:center"></div>-->

	<div style="text-align:center">
		<h1>Thank you for your purchase!</h1>
		<h3>Confirmation #: 123456789</h3>
		<img src="img/confirmation-photo.jpg"/>

<div class="small-container">
		<div class="form-control">
			<a href="index.php" class="form-button">Keep Shopping</a>
		</div>	

	</div>

</body>
</html>