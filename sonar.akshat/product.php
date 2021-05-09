<?php

    include_once "php/functions.php";

    $product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];
    
    $images = explode(",", $product->images);

    $image_elements = array_reduce($images,function($r,$o){
        return $r. "<img src='../sonar.akshat/img/$o'>";
    });

    //print_p($_SESSION);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/productthumbs.js"></script>
</head>


<body>
    <?php include "parts/meta.php"; ?>
   	<?php include "parts/navbar.php"; ?>
    
    <div class="content">
        <div class="">
            <figure class="fig">
                <div class="mainimg">
                    <img src="img/<?= $product->thumbnail ?>" width="450px" object-fit="contain" alt="">
                </div>
                <div class="thumbnails">
                    <?= $image_elements ?>
                </div>
            </figure>
        </div>


        <div class="productinfo">
            <form method="post" action="cart_actions.php?action=add-to-cart">

                <input type="hidden" value="<?= $product->id ?>" name="product-id">

            <div class="info">
                <h1 class="title"><?= $product->name ?></h1> 
                <h2 style="font-family: aktiv-grotesk,sans-serif;font-weight: 700;font-style: bold;color: #2C23F7;margin:0px;padding-left: 30px;">&#8377;<?= $product->price ?></h2>
                <div class="ps">
                    <label class="h3" for="product-amount">Amount</label>
                    <div class="select" id="product-amount">
                        <select class="sel" id="product-amount" name="product-amount">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>

                   
                    <label class="h3" for="product-console">Console</label>
                    <div class="select" id="product-console">
                        <select class="sel" id="product-console" name="product-console">
                            <option>PS5</option>
                            <option>PS4</option>
                        </select>
                    </div>
                </div>
                <p class="para"><?= $product->description ?></p>
            </div>
            
            <div class="button">
                <input type="submit" value="ADD TO CART" class="cart">
            </div>
        </div></form>
    </div>  
</body>