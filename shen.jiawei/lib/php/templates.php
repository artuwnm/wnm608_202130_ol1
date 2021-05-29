<?php
function item_card($item,$index,$col = 6) {
  $current = number_format($item->current_price, 2);
  $discount = round((1 - $item->current_price / $item->price) * 100);
  $discountTag = $discount > 0 ? "<div class=\"discount\">-$discount%</div>" : '';
  $fullTag = $discount > 0 ? "<div class=\"full\">$ ".number_format($item->price, 2)."</div>" : '';
  echo <<<HTML
    <div class="item-card col-s-12 col-l-$col" onclick="location.href = '/wnm608/shen.jiawei/product.php?id=$item->id'" style="max-height: 500px;">
      <div class="img" style="background-image: url(/wnm608/shen.jiawei/img/products/thumb/$item->image);">
        <div class="overlay">
          <button>Buy</button>
        </div>
      </div>
      <div class="info">
        <div class="desc">
          <h3>$item->name</h3>
          <!-- <p>Great stuff!</p> -->
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
function item_card_h($item,$index) {
  $item = (object)$item;
  $current = number_format($item->current_price * 1, 2);
  $discount = round((1 - $item->current_price / $item->price) * 100);
  $fullTag = $discount > 0 ? "<span class=\"full\">$ ".number_format($item->price, 2)."</span> &nbsp;|&nbsp; " : '';
  echo <<<HTML
    <div class="item-card horizontal col-s-12 col-l-6 col-xl-4" onclick="location.href = '/wnm608/shen.jiawei/admin/products.php?id=$item->id'">
      <div class="img" style="background-image: url(/wnm608/shen.jiawei/img/products/thumb/$item->image);">
      </div>
      <div class="info">
        <div class="desc">
          <h3>$item->name</h3>
          <p>$fullTag $ $current</p>
        </div>
      </div>
    </div>
  HTML;
}
function cart_item($item,$index) {
  $current = number_format($item->current_price, 2);
  $total = number_format($current * $item->amount, 2);
  echo <<<HTML
    <div data-id="$item->id" class="card flex cart-item" style="margin-top:20px">
      <img src="/wnm608/shen.jiawei/img/products/$item->image" alt="product" width="218">
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
$platform_options = [
  [
    "value"=>"xbox",
    "title"=>"Xbox",
    "icon"=>"xbox-logo.svg"
  ],
  [
    "value"=>"ns",
    "title"=>"Nintendo Switch",
    "icon"=>"nintendo-switch-logo.svg"
  ]
];
$type_options = [
  [
    "value"=>"full",
    "title"=>"Full Controller",
    "icon"=>"game-controller.svg"
  ],
  [
    "value"=>"left",
    "title"=>"Left Half Controller",
    "icon"=>"left-joy-con.svg"
  ],
  [
    "value"=>"right",
    "title"=>"Right Half Controller",
    "icon"=>"right-joy-con.svg"
  ],
  [
    "value"=>"accessory",
    "title"=>"Accessory",
    "label"=>"ACC"
  ]
];
function single_select_card($name, $options, $form, $required = false, $form_id="") {
  $form_id = strlen($form_id) > 0 ? ' form="'.$form_id.'"' : '';
  $required = $required ? " required" : "";
  return implode("\n", array_map(function($option) use($name, $form_id, $form, $required) {
    $id = "radio-$name-{$option['value']}";
    $label = isset($option['icon']) ? <<<HTML
    <img src="/wnm608/shen.jiawei/img/icons/{$option['icon']}" alt="{$option['title']}">
    HTML : $option['label'];
    $checked = isset($form[$name]) && $option['value'] == $form[$name] ? " checked" : "";
    return <<<HTML
    <div class="select-card">
      <input type="radio" name="$name" value="{$option['value']}" id="$id"$form_id$required$checked>
      <label for="$id" class="card no-padding flex center" title="{$option['title']}">
        $label
      </label>
    </div>
    HTML;
  }, $options));
}
$wireless_options = [
  [
    "name"=>"2-4g",
    "title"=>"2.4g",
    "label"=>"2.4g"
  ],
  [
    "name"=>"bluetooth",
    "title"=>"Bluetooth",
    "icon"=>"bluetooth.svg"
  ]
];
function multi_select_card($form, $form_id="") {
  $form_id = strlen($form_id) > 0 ? ' form="'.$form_id.'"' : '';
  return function($option) use($form_id, $form) {
    $name = $option['name'];
    $id = "checkbox-$name";
    $label = isset($option['icon']) ? <<<HTML
    <img src="/wnm608/shen.jiawei/img/icons/{$option['icon']}" alt="{$option['title']}">
    HTML : $option['label'];
    $checked = isset($form[$name]) && ("on" == $form[$name] || 1 == $form[$name]) ? " checked" : "";
    return <<<HTML
    <div class="select-card">
      <input type="checkbox" name="$name" id="$id"$form_id$checked>
      <label for="$id" class="card no-padding flex center" title="{$option['title']}">
        $label
      </label>
    </div>
    HTML;
  };
}
?>