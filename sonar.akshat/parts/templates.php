<?php

function productListTemplate($r,$o) {
return $r.<<<HTML
<a class="figu" href="product.php?id=$o->id">
    <figure>
        <img src="img/$o->thumbnail" alt="" class="figimg">
        <figcaption><div>$o->name<br>&#8377;$o->price</div></figcaption>
    </figure>
</a>

HTML;
}

function selectAmount($amount=1,$total=10) {
	$output = "<select name='amount' class='amtsel'>";
	for($i=1;$i<=$total;$i++) {
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}

function cartListTemplate($r,$o){
$totalfixed = number_format($o->total,2,'.','');
$selectamount = selectAmount($o->amount,4);
return $r.<<<HTML

<div style="display: flex; justify-content: left; padding-top: 15px; padding-bottom: 15px;">
	<div style="padding-left: 30px; padding-right: 30px;padding-top: 5px;">
		<strong><p style="margin: 0px; font-weight: 700; color: #2C23F7;">$o->name ($o->amount)</p></strong>
	</div>

	<div style="padding-right: 30px;padding-top: 5px;">
		<p style="margin: 0px;font-weight: 700;">&#8377;$totalfixed</p>
	</div>

	<div style="padding-right: 30px;">
		<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
			<input type="hidden" name="id" value="$o->id">
			<div style="margin: 0px;">
				$selectamount
			</div>
		</form>
	</div>

	<div style="padding-right: 30px;">
		<form action="cart_actions.php?action=delete-cart-item" method="post" style="margin: 0px;font-family: aktiv-grotesk,sans-serif;font-weight: 400;font-style: normal;">
			<input type="hidden" name="id" value="$o->id">
			<input type="submit" class="inlinebtn" value="Delete">
		</form>
	</div>
</div>

HTML;
}

function cartTotals() {
	$cart = getCartItems();

	$cartprice = array_reduce($cart,function($r,$o){return $r + $o->total;},0);

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.0725,2,'.','');
	$taxedfixed = number_format($cartprice*1.0725,2,'.','');


return <<<HTML
	<div style="box-shadow: 0 2px 50px rgba(0,0,0,0.2); border-radius: 10px; margin-left: 50px; display: flex;">
			<div style="padding-left: 30px;">
				<div><p style="font-weight: 700;">Sub Total</p></div>
				<div><p style="font-weight: 700;">Taxes</p></div>
				<div><p style="font-weight: 700;">Total</p></div>
			</div>
			<div style="text-align: right; padding-right: 30px;padding-left: 50px;">
				<div><p>&#8377; $pricefixed</p></div>
				<div><p>&#8377; $taxfixed</p></div>
				<div><p>&#8377; $taxedfixed</p></div>
			</div>
	</div>

HTML;
}

function recommendedProducts($a) {
$products = array_reduce($a,'productListTemplate');
echo <<<HTML
<div class="productlist">$products</div>
HTML;
}

function recommendedCategory($cat,$limit=3) {
	$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='$cat' ORDER BY `date_create` DESC LIMIT $limit");
	recommendedProducts($result);
}

function recommendedSimilar($cat,$id=0,$limit=3) {
	$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='$cat' AND `id`<>$id ORDER BY rand() DESC LIMIT $limit");
	recommendedProducts($result);
}


