<!DOCTYPE html>
<html lang="en">
<head>
  <?php $title = "Cart" ?>
  <?php include "parts/head.php" ?>
</head>
<body>
  <?php include "parts/navbar.php" ?>
  <section class="padded">
    <?php
      include_once "lib/php/auth.php";
      $db = db_joystore();
      include_once "lib/php/functions.php";
      $products = queryAll("SELECT * FROM `products` ORDER BY rand() LIMIT 3");
      include_once "lib/php/templates.php";
      array_walk($products, "cart_item", 6)
    ?>
  </section>
  <section style="padding: 40px;">
    <div class="card soft pill flex">
      <div class="grow">
        <h2>$ <?php
         $total = array_reduce($products,function($price,$item) {
            return $price + $item->price * (1 - $item->discount / 100);
          },0);
          echo number_format($total,2)
        ?></h2>
      </div>
      <button class="primary strong" onclick="location.href='/wnm608/shen.jiawei/checkout.php'">Check Out</button>
    </div>
  </section>
</body>
</html>