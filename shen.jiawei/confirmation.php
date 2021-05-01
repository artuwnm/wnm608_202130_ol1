<?php
include_once "lib/php/getcart.php";
// setcookie("cart", "", 0, "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php $title = "Confirmation" ?>
  <?php include "parts/head.php" ?>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <script>Cookies.remove("cart")</script>
</head>
<body>
  <?php include "parts/navbar.php" ?>
  <section class="padded">
    <div class="card soft">
      <h2>Your stuff is on their way!</h2>
      <div class="flex center wrap">
        <?php
          array_walk($products, function ($p) {
            echo <<<HTML
            <div>
              <img src="/wnm608/shen.jiawei/img/products/$p->id.jpeg" alt="product" style="margin: 10px;width: 300px;">
            </div>
            HTML;
          })
        ?>
      </div>
    </div>
  </section>
</body>
</html>