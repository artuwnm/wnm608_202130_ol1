<!DOCTYPE html>
<html lang="en">
<head>
  <?php $title = "Cart" ?>
  <?php include "parts/head.php" ?>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
</head>
<body>
  <?php include "parts/navbar.php" ?>
  <section class="padded">
    <?php
      include_once "lib/php/getcart.php";
      include_once "lib/php/templates.php";
      array_walk($products, "cart_item", 6)
    ?>
  </section>
  <section style="padding: 40px;">
    <div class="card soft pill flex">
      <div class="grow">
        <h2>$ <span class="cart-total">
          <?php
            echo number_format($total,2)
          ?>
        </span></h2>
      </div>
      <button class="primary strong checkout" style="font-size: larger; width: 200px;" onclick="location.href='/wnm608/shen.jiawei/checkout.php'"<?= count($cart) == 0 ? " disabled" : "" ?>>Check Out</button>
    </div>
  </section>
  <script src="./js/cart.js"></script>
</body>
</html>