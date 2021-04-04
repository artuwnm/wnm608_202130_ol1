<!DOCTYPE html>
<html lang="en">
<head>
  <?php $title = "Cart" ?>
  <?php include "parts/head.php" ?>
</head>
<body>
  <?php include "parts/navbar.php" ?>
  <section class="padded">
    <div class="card flex" style="margin-top:20px">
      <img src="https://via.placeholder.com/200?text=product" alt="product">
      <div class="grow flex column" style="justify-content: center;">
        <h3>Product Name</h3>
      </div>
      <div class="flex column" style="align-items:flex-end">
        <h3>$ 59.99</h3>
        <div class="flex" style="margin: 40px 0;">
          <button class="round">-</button>
          <div class="material-input" style="margin: 0 1rem; width: 50px;"><input type="text" value="1"></div>
          <button class="round">+</button>
        </div>
      </div>
    </div>
    <div class="card flex" style="margin-top:20px">
      <img src="https://via.placeholder.com/200?text=product" alt="product">
      <div class="grow flex column" style="justify-content: center;">
        <h3>Product Name</h3>
      </div>
      <div class="flex column" style="align-items:flex-end">
        <h3>$ 59.99</h3>
        <div class="flex" style="margin: 40px 0;">
          <button class="round">-</button>
          <div class="material-input" style="margin: 0 1rem; width: 50px;"><input type="text" value="1"></div>
          <button class="round">+</button>
        </div>
      </div>
    </div>
    <div class="card flex" style="margin-top:20px">
      <img src="https://via.placeholder.com/200?text=product" alt="product">
      <div class="grow flex column" style="justify-content: center;">
        <h3>Product Name</h3>
      </div>
      <div class="flex column" style="align-items:flex-end">
        <h3>$ 59.99</h3>
        <div class="flex" style="margin: 40px 0;">
          <button class="round">-</button>
          <div class="material-input" style="margin: 0 1rem; width: 50px;"><input type="text" value="1"></div>
          <button class="round">+</button>
        </div>
      </div>
    </div>
  </section>
  <section style="padding: 40px;">
    <div class="card soft pill flex">
      <div class="grow">
        <h2>$ 179.97</h2>
      </div>
      <button class="primary strong" onclick="location.href='/wnm608/shen.jiawei/checkout.php'">Check Out</button>
    </div>
  </section>
</body>
</html>