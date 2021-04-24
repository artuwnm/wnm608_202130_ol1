<!DOCTYPE html>
<html lang="en">
<head>
  <?php $title = "Store" ?>
  <?php include "parts/head.php" ?>
  <script src="/wnm608/shen.jiawei/lib/js/selectable-cards.js"></script>
</head>
<body>
  <?php include "parts/navbar.php" ?>
  <div class="grid gap container padded" style="height: 900px;">
    <div class="col-s-12 col-l-3">
      <h3>Filters</h3>
      <div id="filters" class="flex column">
        <div class="card selectable">Filter 1</div>
        <div class="card selectable">Filter 2</div>
        <div class="card selectable">Filter 3</div>
        <div class="card selectable">Filter 4</div>
        <div class="card selectable">Filter 5</div>
      </div>
      <script>selCards("#filters" ,console.log ,true)</script>
    </div>
    <div class="col-s-12 col-l-9 card soft grid gap">
      <?php
        include_once "lib/php/auth.php";
        $db = db_joystore();
        include_once "lib/php/functions.php";
        $products = queryAll("SELECT * FROM `products` LIMIT 6");
        include_once "lib/php/templates.php";
        array_walk($products, "item_card", 6)
      ?>
    </div>
  </div>
</body>
</html>