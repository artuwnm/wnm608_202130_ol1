<?php
include_once "lib/php/auth.php";
$db = db_joystore();
include_once "lib/php/functions.php";
$product = queryAll("SELECT * FROM `products` WHERE `id`=".sanitize($_GET['id']))[0];
$current = number_format($product->current_price, 2);
$discount = round((1 - $product->current_price / $product->price) * 100);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php $title = "Product" ?>
  <?php include "parts/head.php" ?>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
</head>
<body>
  <?php include "parts/navbar.php" ?>
  <section class="flex center">
    <img src="/wnm608/shen.jiawei/img/products/<?= $product->image ?>" alt="product">
    <div class="flex column" style="margin-left: 50px;">
      <h2 style="text-align: left;"><?= $product->name ?></h2>
      <h3>$ <?= $current?></h3>
      <div class="flex stepper" style="margin: 40px 0;">
        <button class="round">-</button>
        <div class="material-input" style="margin: 0 1rem; width: 50px;"><input id="amount" type="text" value="1"></div>
        <button class="round">+</button>
      </div>
      <button class="primary" onclick="addToCart()">Add To Cart</button>
    </div>
  </section>
  <section class="padded">
    <h2>Related Products</h2>
    <div class="grid gap" style="height: 233px;">
      <?php
        include_once "lib/php/templates.php";
        $related_products = queryAll("SELECT * FROM `products` WHERE `platform`='$product->platform' ORDER BY rand() LIMIT 3");
        array_walk($related_products,"item_card",4);
      ?>
    </div>
  </section>
  <div class="popup-container">
    <div class="card" style="padding: 50px;">
      <h2 style="margin-top: 0;"><?= $product->name ?> added to your cart!</h2>
      <div class="flex center h-gap-margin">
        <button onclick="hidePopup()">Back to shopping</button>
        <button class="primary" onclick="location.href = '/wnm608/shen.jiawei/cart.php'">Go to cart</button>
      </div>
    </div>
  </div>
  <script src="./lib/js/popup.js"></script>
  <script src="./js/cart.js"></script>
</body>
</html>