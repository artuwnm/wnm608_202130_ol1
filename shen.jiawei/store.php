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
      <div class="item-card col-s-12 col-l-6" onclick="location.href = '/wnm608/shen.jiawei/product.php'">
        <div class="img" style="background-image: url(/wnm608/shen.jiawei/img/soyuzms14.jpg);">
          <div class="overlay">
            <button>Buy</button>
          </div>
        </div>
        <div class="info">
          <div class="desc">
            <h3>Soyuz</h3>
            <p>🇷🇺 Russian Spaceship</p>
          </div>
          <div class="discount">-90%</div>
          <div class="price">
            <div class="full">$ 99.99</div>
            <div class="current">$ 9.99</div>
          </div>
        </div>
      </div>
      <div class="item-card col-s-12 col-l-6" onclick="location.href = '/wnm608/shen.jiawei/product.php'">
        <div class="img" style="background-image: url(/wnm608/shen.jiawei/img/soyuzms14.jpg);">
          <div class="overlay">
            <button>Buy</button>
          </div>
        </div>
        <div class="info">
          <div class="desc">
            <h3>Soyuz</h3>
            <p>🇷🇺 Russian Spaceship</p>
          </div>
          <div class="discount">-90%</div>
          <div class="price">
            <div class="full">$ 99.99</div>
            <div class="current">$ 9.99</div>
          </div>
        </div>
      </div>
      <div class="item-card col-s-12 col-l-6" onclick="location.href = '/wnm608/shen.jiawei/product.php'">
        <div class="img" style="background-image: url(/wnm608/shen.jiawei/img/soyuzms14.jpg);">
          <div class="overlay">
            <button>Buy</button>
          </div>
        </div>
        <div class="info">
          <div class="desc">
            <h3>Soyuz</h3>
            <p>🇷🇺 Russian Spaceship</p>
          </div>
          <div class="discount">-90%</div>
          <div class="price">
            <div class="full">$ 99.99</div>
            <div class="current">$ 9.99</div>
          </div>
        </div>
      </div>
      <div class="item-card col-s-12 col-l-6" onclick="location.href = '/wnm608/shen.jiawei/product.php'">
        <div class="img" style="background-image: url(/wnm608/shen.jiawei/img/soyuzms14.jpg);">
          <div class="overlay">
            <button>Buy</button>
          </div>
        </div>
        <div class="info">
          <div class="desc">
            <h3>Soyuz</h3>
            <p>🇷🇺 Russian Spaceship</p>
          </div>
          <div class="discount">-90%</div>
          <div class="price">
            <div class="full">$ 99.99</div>
            <div class="current">$ 9.99</div>
          </div>
        </div>
      </div>
      <div class="item-card col-s-12 col-l-6" onclick="location.href = '/wnm608/shen.jiawei/product.php'">
        <div class="img" style="background-image: url(/wnm608/shen.jiawei/img/soyuzms14.jpg);">
          <div class="overlay">
            <button>Buy</button>
          </div>
        </div>
        <div class="info">
          <div class="desc">
            <h3>Soyuz</h3>
            <p>🇷🇺 Russian Spaceship</p>
          </div>
          <div class="discount">-90%</div>
          <div class="price">
            <div class="full">$ 99.99</div>
            <div class="current">$ 9.99</div>
          </div>
        </div>
      </div>
      <div class="item-card col-s-12 col-l-6" onclick="location.href = '/wnm608/shen.jiawei/product.php'">
        <div class="img" style="background-image: url(/wnm608/shen.jiawei/img/soyuzms14.jpg);">
          <div class="overlay">
            <button>Buy</button>
          </div>
        </div>
        <div class="info">
          <div class="desc">
            <h3>Soyuz</h3>
            <p>🇷🇺 Russian Spaceship</p>
          </div>
          <div class="discount">-90%</div>
          <div class="price">
            <div class="full">$ 99.99</div>
            <div class="current">$ 9.99</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>