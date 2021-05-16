<!DOCTYPE html>
<html lang="en">
<head>
  <?php $title = "Checkout" ?>
  <?php include "parts/head.php" ?>
</head>
<body>
  <?php include "parts/navbar.php" ?>
  <div class="grid gap container padded" style="height: 900px;">
    <div class="col-s-12 col-l-9 card soft">
      <h3>Credit Card</h2>
      <div class="material-input">
        <input type="text" placeholder=" " />
        <label>Name On Card</label>
      </div>
      <div class="material-input">
        <input type="text" placeholder=" " />
        <label>Card Number</label>
      </div>
      <div class="material-input">
        <input type="text" placeholder=" " />
        <label>Expiration Month</label>
      </div>
      <div class="material-input">
        <input type="text" placeholder=" " />
        <label>Expiration Year</label>
      </div>
      <div class="material-input">
        <input type="text" placeholder=" " />
        <label>CVV</label>
      </div>
      <h3 style="margin-top: 0.5em;">Address</h3>
      <div class="material-input">
        <input type="text" placeholder=" " />
        <label>Full Name</label>
      </div>
      <div class="material-input">
        <input type="text" placeholder=" " />
        <label>Email</label>
      </div>
      <div class="material-input">
        <input type="text" placeholder=" " />
        <label>Street</label>
      </div>
      <div class="material-input">
        <input type="text" placeholder=" " />
        <label>City</label>
      </div>
      <div class="material-input">
        <input type="text" placeholder=" " />
        <label>State</label>
      </div>
      <div class="material-input">
        <input type="text" placeholder=" " />
        <label>Zip</label>
      </div>
    </div>
    <div class="col-s-12 col-l-3 card">
      <h2>$ <?php
        include_once "lib/php/getcart.php";
        echo number_format($total,2)
      ?></h2>
      <div class="material-input" style="margin-bottom: 1rem;">
        <input type="text" placeholder=" " />
        <label>Promotion Code</label>
      </div>
      <button class="primary" style="width: 100%;" onclick="location.href='/wnm608/shen.jiawei/confirmation.php'">Complete Payment</button>
    </div>
</body>
</html>