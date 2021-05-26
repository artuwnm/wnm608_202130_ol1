<?php

include_once "php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Store</title>
    <?php include "parts/meta.php"; ?>    
</head>

<body>
	
	<?php include "parts/navbar.php"; ?>
    
    <div class="searchbox">
        <div class="search">
            <form id="product-search">
                <input class="hotdog" type="search" placeholder="Search">
            </form>
        </div>


        <div class="filter">
            <div><button data-filter="category" data-value="" type="button" class="filterbtn">All</button></div>
            <div><button data-filter="category" data-value="discs" type="button" class="filterbtn">Discs</button></div>
            <div><button data-filter="category" data-value="accessories" type="button" class="filterbtn">Extra</button></div>
        </div>

        <div class="sort">
            <select class="js-sort">
                <option value="2">Newest</option>
                <option value="1">Oldest</option>
                <option value="3">Least Expensive</option>
                <option value="4">Most Expensive</option>
            </select>
        </div>
    </div>

    <div class="productlist"></div>

</body>
</html>