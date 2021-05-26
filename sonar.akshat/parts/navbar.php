<?php
	
include_once "php/functions.php";

?>

<div class="nav">
    <a class="logo" href="index.php"><img src="img/SVG/GSLogo.svg" style="width: 300px; padding-top: 32px; padding-left: 50px;"></a>

            <nav class="navi">
                <ul class="navii">
                    <li><a href="store.php" class="nav1">Store</a></li>
                    
                    <a href="cart.php" class="link1"><div class="cartcont">
                        <img src="img/SVG/cart.svg" style="width: 25px;">
                        <div class="cartno"><?= makeCartBadge(); ?></div></a>
                    </div>
                </ul>
            </nav> 
</div>