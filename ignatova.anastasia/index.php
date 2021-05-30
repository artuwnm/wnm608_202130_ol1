<?php 
    include_once "lib/php/functions.php";
    include_once "parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, <!-- initial-scale=1.0 -->">

<!-- META INFO -->
	<?php include "parts/meta.php"; ?>


	<title>Product List</title>
</head>
	
<body class="flush">

<!-- NAVABAR -->
	<?php include "parts/navbar.php"; ?>

<div class="container banner position-relative">

            <div class="bannertext position-absolute">
                <h2 class="text-center">Manifestation of your healthy skin</h2>
                <!-- <a href=""><button></button></a> -->
            </div>

            <img style="max-width:100%;" src="img/background.jpg">
</div>


<section class="display-flex flex-justify-center"><h2>Get started with these best sellers</h2></section>
















<div class="container">

    <?php 
recommendedCategory("serum");
    ?>
</div>





















<!-- <div class="container navbar display-flex">
<footer>
	<p>Innerbloom Beauty 2021</p>
</footer>
</div> -->

</body>
</html>