<!DOCTYPE html>
<html lang="en">
<head>
  <?php $title = "Product" ?>
  <?php include "parts/head.php" ?>
</head>
<body>
  <?php include "parts/navbar.php" ?>
  <section class="flex center">
    <img src="https://via.placeholder.com/500?text=Product" alt="product">
    <div class="flex column" style="margin-left: 50px;">
      <h2 style="text-align: left;">Product Name</h2>
      <h3>$ 59.99</h3>
      <div class="flex" style="margin: 40px 0;">
        <button class="round">-</button>
        <div class="material-input" style="margin: 0 1rem; width: 50px;"><input type="text" value="0"></div>
        <button class="round">+</button>
      </div>
      <button class="primary">Add To Cart</button>
    </div>
  </section>
  <?php $section_title = "Related Products" ?>
  <?php include "parts/placeholder-item-section.php" ?>
</body>
</html>