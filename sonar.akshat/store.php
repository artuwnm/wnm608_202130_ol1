<?php

include_once "php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Store</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/store.css">
    <link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
    <meta name="viewport" content="width=device-width">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/store.js"></script>

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
    <div class='productlist'></div>

</body>
</html>