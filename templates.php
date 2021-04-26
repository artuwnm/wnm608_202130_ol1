<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<a class="col-xs-6 col-md-4" href="product_item.php?id=$o->id">
				<div class="card soft display-flex flex-column">
					<img src="img/$o->thumbnail" alt="" class="media-image">
				</div>
				<div class="flex-none"></div>
				<div>$o->name</div>
				<div>&dollar;$o->price</div>
</a>

HTML;
}


function cartListTemplate($r,$o){
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none images-thumb">
		<img src="img/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<strong>$o->name</strong>
		<div>Delete</div>
	</div>
	<div class="flex-none">
		&dollar;$o->price
	</div>
</div>
HTML;
}