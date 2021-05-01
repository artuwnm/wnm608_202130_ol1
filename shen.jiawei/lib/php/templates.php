<?php
function item_card($item,$index,$col) {
  if (!isset($col)) $col = 6;
  $current = number_format($item->price * (1 - $item->discount / 100), 2);
  $discount = round($item->discount);
  $discountTag = $discount > 0 ? "<div class=\"discount\">-$discount%</div>" : '';
  $fullTag = $discount > 0 ? "<div class=\"full\">$ $item->price</div>" : '';
  echo <<<HTML
    <div class="item-card col-s-12 col-l-$col" onclick="location.href = '/wnm608/shen.jiawei/product.php?id=$item->id'">
      <div class="img" style="background-image: url(/wnm608/shen.jiawei/img/products/thumb/$item->id.jpeg);">
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
  $total = number_format($current * $item->amount, 2);
  echo <<<HTML
    <div data-id="$item->id" class="card flex cart-item" style="margin-top:20px">
      <img src="/wnm608/shen.jiawei/img/products/$item->id.jpeg" alt="product" width="218">
      <div class="grow flex column" style="justify-content: center;margin-left: 1rem;">
        <h3 style="margin:0;">$item->name</h3>
        <p style="margin-bottom:0;">$ <span class="price">$current</span></p>
      </div>
      <div class="flex column" style="align-items:flex-end;justify-content:space-between;">
        <h3>$ <span class="item-total">$total</span></h3>
        <div class="flex stepper" style="margin: 40px 0;">
          <button class="round">-</button>
          <div class="material-input" style="margin: 0 1rem; width: 50px;"><input type="text" value="$item->amount"></div>
          <button class="round">+</button>
        </div>
        <button class="delete" onclick="deleteItemInCart(this)">× &nbsp;Delete</button>
      </div>
    </div>
  HTML;
}
?>