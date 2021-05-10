
const listItemTemplate = templater(o=>`
<div class="col-xs-12 col-md-4" >
	<div class="list_border">
		<a href="product_item.php?id=${o.id}">
			<figure class="figure product">
				<img src="img/${o.thumbnail}" alt="">
				<figcaption>
					<div class="product_title">${o.title}</div>
					<div class="product_price">&dollar;${o.price}</div>
				</figcaption>
			</figure>
		</a>
	</div>
</div>
`);



