<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "parts/head.php" ?>
</head>
<body>
  <?php include "parts/navbar.php" ?>
  <section class="padded">
    <div class="card no-padding">
      <img class="hero" src="https://via.placeholder.com/1200x400?text=Ads" alt="ads">
    </div>
  </section>
  <section class="padded">
    <h2>Featured</h2>
    <div class="grid gap" style="height: 233px;">
      <?php
        include_once "lib/php/auth.php";
        $db = db_joystore();
        include_once "lib/php/functions.php";
        include_once "lib/php/templates.php";
        $featured_products = queryAll("SELECT * FROM `products` ORDER BY rand() LIMIT 3");
        array_walk($featured_products,"item_card",4);
      ?>
    </div>
  </section>
  <section class="padded">
    <h2>Discounts</h2>
    <div class="grid gap" style="height: 233px;">
      <?php
        $discounted_products = queryAll("SELECT * FROM `products` WHERE `price` > `current_price` ORDER BY rand() LIMIT 3");
        array_walk($discounted_products,"item_card",4);
      ?>
    </div>
  </section>
  <section class="padded">
    <h2>About Us</h2>
    <div class="card soft flex center">
      <img src="https://via.placeholder.com/500?text=About+Us" alt="about us">
      <div class="flex column" style="margin-left: 100px;">
        <h3>Subscribe to our newsletter</h3>
        <div class="material-input">
          <input type="text" placeholder=" " />
          <label>Email</label>
        </div>
      </div>
    </div>
  </section>
</body>
</html>