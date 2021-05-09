

const listItemTemplate = templater(o=>`
<a class="fig" href="product.php?id=${o.id}">
    <figure class="figure" style="transition: all 0.3s;">
        <img src="img/${o.thumbnail}" alt="" style="display: block;margin-left: auto;margin-right: auto;margin-top:5px;height:72%;">
        <figcaption><div style="padding-top: 15px;">${o.name}<br>&#8377;${o.price}</div></figcaption>
    </figure>
</a>
`);