<?php
include_once "../lib/php/auth.php";
$db = db_joystore_pdo();

if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
  $db->prepare("DELETE FROM `products` WHERE id=?")->execute([$_GET['delete']]);
}

if (count($_POST) > 0) {
  if (is_numeric($_GET['id'])) {
    $write_statement = $db->prepare("UPDATE `products` SET 
      `name`=?,
      `image`=?,
      `price`=?,
      `current_price`=?,
      `platform`=?,
      `type`=?,
      `2.4g`=?,
      `bluetooth`=?,
      `hue`=?,
      `date_modify`=NOW()
    WHERE `id`=?
    ");
    $write_statement->execute([
      $_POST['name'],
      $_POST['image'],
      $_POST['price'],
      $_POST['current_price'],
      $_POST['platform'],
      $_POST['type'],
      isset($_POST['2-4g']) && $_POST['2-4g'] == "on" ? 1 : 0,
      isset($_POST['bluetooth']) && $_POST['bluetooth'] == "on" ? 1 : 0,
      ($_POST['hue'] < 0 ? 1 : 360) * $_POST['hue'],
      $_GET['id']
    ]);
  } else {
    $write_statement = $db->prepare("INSERT INTO `products` (
      `name`,
      `image`,
      `price`,
      `current_price`,
      `platform`,
      `type`,
      `2.4g`,
      `bluetooth`,
      `hue`,
      `id`,
      `description`,
      `date_create`,
      `date_modify`
    ) VALUES (?,?,?,?,?,?,?,?,?,NULL,'',NOW(),NOW())
    ");
    $write_statement->execute([
      $_POST['name'],
      $_POST['image'],
      $_POST['price'],
      $_POST['current_price'],
      $_POST['platform'],
      $_POST['type'],
      isset($_POST['2-4g']) && $_POST['2-4g'] == "on" ? 1 : 0,
      isset($_POST['bluetooth']) && $_POST['bluetooth'] == "on" ? 1 : 0,
      ($_POST['hue'] < 0 ? 1 : 360) * $_POST['hue']
    ]);
    header("location:{$_SERVER['PHP_SELF']}?id=".$db->lastInsertId());
    die();
  }
}

$exclude_current_id = isset($_GET['id']) && is_numeric($_GET['id']) ? " WHERE `id`<>".$_GET['id'] : "";
$products = $db->query("SELECT `id`,`name`, `image`,`price`,`current_price` FROM `products`$exclude_current_id ORDER BY `date_modify` DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php $title = "Products Admin" ?>
  <?php include "../parts/head.php" ?>
  <script src="/wnm608/shen.jiawei/lib/js/remove-query.js"></script>
</head>
<body>
  <header class="pill">
    <div>Joystore Admin</div>
    <nav><a href="/wnm608/shen.jiawei/admin/products.php">Products</a></nav>
  </header>
  <div class="spacer header pill"></div>
  <div class="container padded grid gap">
    <div id="product-list" class="card soft col-s-12 <?= isset($_GET['id']) ? 'col-l-4 flex column v-gap-margin' : 'grid gap' ?>">
      <div class="item-card horizontal col-s-12 col-l-6 col-xl-4" onclick="location.href = '/wnm608/shen.jiawei/admin/products.php?id=new'">
        <div class="img flex center">
          <div style="font-size: 4rem; padding-top: 4px">+</div>
        </div>
        <div class="info">
          <div class="desc">
            <h3>Add Product</h3>
          </div>
        </div>
      </div>
      <?php
        if (isset($_GET['id'])) {
          if (is_numeric($_GET['id'])) {
            $product_statement = $db->prepare("SELECT * FROM `products` WHERE `id`=?");
            $product_statement->execute([$_GET['id']]);
            $product = $product_statement->fetch();
            $product['2-4g'] = $product['2.4g'];
            $selected_item = 2;
            array_unshift($products, $product);
          } else {
            $product = [
              "name"=>"Switch Pro Controller - Splatoon 3 Edition",
              "image"=>"12.jpeg",
              "price"=>"119.99",
              "current_price"=>"119.99",
              "platform"=>"ns",
              "type"=>"full",
              "bluetooth"=>"on",
              "hue"=>"295"
            ];
            $selected_item = 1;
          }
        }
        include_once "../lib/php/templates.php";
        array_walk($products, "item_card_h");
      ?>
    </div>
    <?php
    if (isset($_GET['id'])) {
      $platform_form = single_select_card("platform", $platform_options, $product, true);
      $type_form = single_select_card("type", $type_options, $product, true);
      $wireless_form = implode("\n", array_map(multi_select_card($product), $wireless_options));
      $hue_white_active = $product['hue'] == -2 ? " active" : "";
      $hue_black_active = $product['hue'] == -1 ? " active" : "";
      $hue_spectrum_active = $product['hue'] >= 0 ? " active" : "";
      $hue_percentage = max(0, $product['hue']) / 3.6;
      $hue_value = $product['hue'] < 0 ? $product['hue'] : $hue_percentage / 100;
      echo <<<HTML
      <style>
        #product-list > div:nth-child($selected_item) {
          border: 4px solid var(--color-main);
        }
        h4 {
          margin: 1em 0;
        }
      </style>
      <form class="card soft col-s-12 col-l-8" method="POST">
        <div class="flex h-gap-margin" style="margin-bottom: 1rem;">
          <button type="button" onclick="removeQuery('id')">< Back</button>
          <div class="grow"></div>
          <button class="delete" type="button" onclick="showPopup()">Delete</button>
          <button type="button" onclick="location.reload()">Reset All</button>
          <button class="primary" disabled>Save</button>
        </div>
        <div class="material-input">
          <input type="text" name="name" placeholder=" " value="{$product['name']}" required />
          <label>Product Name</label>
        </div>
        <div class="material-input">
          <input type="text" name="image" placeholder=" " value="{$product['image']}" required />
          <label>Image</label>
        </div>
        <div class="material-input">
          <input type="number" name="price" placeholder=" " min="0" max="99999999.99" step="0.01" value="{$product['price']}" required />
          <label>Full Price</label>
        </div>
        <div class="flex">
          <div class="material-input grow">
            <input type="number" name="current_price" placeholder=" " min="0" max="99999999.99" step="0.01" value="{$product['current_price']}" required />
            <label>Current Price</label>
          </div>
          <button type="button" style="height: 3em; margin-left: 1em" onclick="fullPrice()">Full</button>
        </div>
        <h4 class="grow">Platform</h4>
        <div class="flex h-gap-margin">$platform_form</div>
        <h4 class="grow">Type</h4>
        <div class="flex h-gap-margin">$type_form</div>
        <h4 class="grow">Wireless</h4>
        <div class="flex h-gap-margin">$wireless_form</div>
        <div class="grow flex center">
          <h4>Color</h4>
          <div class="grow" style="height: 1em; margin-left: 0.5em; border-radius: 0.5em;"></div>
        </div>
        <div class="hue-input" style="--select-range: 0.28%;">
          <div class="grid gap">
            <div class="col-s-6 col-l-2 card hue-white$hue_white_active"></div>
            <div class="col-s-6 col-l-2 card hue-black$hue_black_active"></div>
            <div class="col-s-12 col-l-8 card hue-spectrum$hue_spectrum_active">
              <div style="margin-left: $hue_percentage%;"></div>
            </div>
          </div>
          <input type="text" name="hue" value="$hue_value" required>
        </div>
      </form>
      <div class="popup-container">
        <div class="card" style="padding: 50px;">
          <h2 style="margin-top: 0;">Delete <span style="color: red;">{$product['name']}</span></h2>
          <p style="text-align: center;">Are you sure?</p>
          <div class="flex center h-gap-margin">
            <button onclick="hidePopup()">Cancel</button>
            <button class="delete" onclick="location.href = '/wnm608/shen.jiawei/admin/products.php?delete={$_GET['id']}'">Delete</button>
          </div>
        </div>
      </div>
      <script src="/wnm608/shen.jiawei/lib/js/popup.js"></script>
      <script src="/wnm608/shen.jiawei/lib/js/hue-input.js"></script>
      <script src="/wnm608/shen.jiawei/js/admin-products.js"></script>
      HTML;
    }
    ?>
  </div>
</body>
</html>