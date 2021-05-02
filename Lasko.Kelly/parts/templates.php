<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-md-4" >
	<div class="list_border">
		<a href="product_item.php?id=$o->id">
			<figure class="figure product">
				<img src="$o->thumbnail" alt="">
				<figcaption>
					<div class="product_title">$o->title</div>
					<div class="product_price">&dollar;$o->price</div>
				</figcaption>
			</figure>
		</a>
	</div>
</div>
HTML;

}


function selectAmount($amount=1,$total=10) {
	$output = "<select name='amount'>";

	for($i=1;$i<=$total;$i++) {
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}

	$output .= "</select>";
	return $output;

}



function cartListTemplate($r,$o) {

$totalfixed = number_format($o->total,2,'.','');

$selectamount = selectAmount($o->amount,10);

return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none image-thumbs">
		<img src="$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<div class="cart_item_names">$o->title</div>
		<form action="cart_actions.php?action=delete-cart-item"method="post">
			<input type="hidden" name="id" value="$o->id">
			<input type="submit" onclick="deleteItemInCart(this)" class="form-button inline" value="Delete" style="font-size: 0.8em">
		</form>
	</div>
	<div class="flex-none cart_price">
		<div>&dollar;$totalfixed</div>
		<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
			<input type="hidden" name="id" value="$o->id">
			<div class="form-select" style="font-size: 0.8em">
				$selectamount
			</div>
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
<div class="card-section display-flex">
	<div class="flex-stretch">Sub Total</div>
	<div class="flex-none cart_subtotal">&dollar;$pricefixed</div>
</div>
<div class="card-section display-flex">
	<div class="flex-stretch">Taxes</div>
	<div class="flex-none cart_subtotal">&dollar;$taxfixed</div>
</div>
<div class="card-section display-flex">
	<div class="flex-stretch">Total</div>
	<div class="flex-none cart_subtotal">&dollar;$taxedfixed</div>
</div>
<div class="card-section display-flex">
	<div class="form-control">
		<a href="product_checkout.php" class="form-button">Checkout</a>
	</div>
</div>

HTML;


}