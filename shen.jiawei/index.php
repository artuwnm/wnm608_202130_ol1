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
  <?php $section_title = "Featured" ?>
  <?php include "parts/placeholder-item-section.php" ?>
  <?php $section_title = "Discounts" ?>
  <?php include "parts/placeholder-item-section.php" ?>
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