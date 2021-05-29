<?php
include_once "lib/php/auth.php";
$db = db_joystore();
include_once "lib/php/functions.php";
$cart = isset($_COOKIE["cart"]) ? json_decode($_COOKIE["cart"]) : [];
$ids = implode(",", array_map(function($p) {return $p->i;}, $cart));
$products = count($cart) == 0 ? [] : queryAll("SELECT * FROM `products` WHERE `id` IN ($ids)");
$products = array_map(function($p) use($cart) {
  $p->amount = array_values(array_filter($cart, function($i) use($p) {return $i->i == $p->id;}))[0]->a;
  return $p;
}, $products);
$total = array_reduce($products,function($price,$item) {
  return $price + $item->current_price * $item->amount;
},0);
?>