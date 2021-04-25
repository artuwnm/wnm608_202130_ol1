<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-md-4" >

	<div class="list_border">
		<a href="product_item.php?id=$o->id">
			<figure class="figure product">
				<img src="img/$o->thumbnail" alt="">
				<figcaption>
					<div class="product_name">$o->name</div>
					<div class="product_price">&dollar;$o->price</div>
				</figcaption>
			</figure>
		</a>
	</div>

</div>

HTML;

}

function cartListTemplate($r,$o) {
return $r.<<<HTML
<div class="display-flex" style="margin-left: -1em;">
	<div class="flex-none image-thumbs" style="margin-left: 1em;">
		<img src="img/$o->thumbnail">
	</div>
	<div class="flex-stretch" style="margin-left: 1em;">
		<div class="cart_item_names">$o->name</div>
		<div class="cart_item_delete">Delete</div>
	</div>
	<div class="flex-none cart_price">
		&dollar;$o->price
	</div>
</div>
HTML;
}