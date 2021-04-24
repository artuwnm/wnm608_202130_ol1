<?php
function item_card($item,$index,$col) {
  if (!isset($col)) $col = 6;
  $current = number_format($item->price * (1 - $item->discount / 100), 2);
  $discount = round($item->discount);
  $discountTag = $discount > 0 ? "<div class=\"discount\">-$discount%</div>" : '';
  $fullTag = $discount > 0 ? "<div class=\"full\">$ $item->price</div>" : '';
  echo <<<HTML
    <div class="item-card col-s-12 col-l-$col" onclick="location.href = '/wnm608/shen.jiawei/product.php?id=$item->id'">
      <div class="img" style="background-image: url(https://via.placeholder.com/500?text=Product);">
        <div class="overlay">
          <button>Buy</button>
        </div>
      </div>
      <div class="info">
        <div class="desc">
          <h3>$item->name</h3>
          <p>Great stuff!</p>
        </div>
        $discountTag
        <div class="price">
          $fullTag
          <div class="current">$ $current</div>
        </div>
      </div>
    </div>
  HTML;
}
function cart_item($item,$index) {
  $current = number_format($item->price * (1 - $item->discount / 100), 2);
  echo <<<HTML
    <div class="card flex" style="margin-top:20px">
      <img src="https://via.placeholder.com/200?text=product" alt="product">
      <div class="grow flex column" style="justify-content: center;">
        <h3>$item->name</h3>
      </div>
      <div class="flex column" style="align-items:flex-end">
        <h3>$ $current</h3>
        <div class="flex" style="margin: 40px 0;">
          <button class="round">-</button>
          <div class="material-input" style="margin: 0 1rem; width: 50px;"><input type="text" value="1"></div>
          <button class="round">+</button>
        </div>
      </div>
    </div>
  HTML;
}
?>