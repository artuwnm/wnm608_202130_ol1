<?php

include "../lib/php/functions.php";

$empty_product = (object)[
	"brand_name"=>"SUNDAY RILEY",
	"name"=>"U.F.O Oil",
	"price"=>"60",
	"quantity"=>"100",
	"category"=>"lightweight_oil",
	"description"=>"Lightweight Oil for acne prone skin",
	"thumbnail"=>"img/sundayriley_ufo_thumb.jpeg",
	"images"=>"sundayriley_ufo_1.jpeg, sundayriley_ufo_2.jpeg"
];

// LOGIC


try {
	$conn = makePDOConn();
	if(isset($_GET['action'])) {
	
	switch($_GET['action']) {

		case "update":
		$statement = $conn->prepare("UPDATE
			`products`
			SET 
			`brand_name`=?,
			`name`=?,
			`price`=?,
			`quantity`=?,
			`category`=?,
			`description`=?,
			`thumbnail`=?,
			`images`=?,
			`date_modify()`=NOW()
			WHERE `id`=?
			");

		$statement->execute([
			$_POST[`product-brand_name`],
			$_POST[`product-name`],
			$_POST[`product-price`],
			$_POST[`product-quantity`],
			$_POST[`product-category`],
			$_POST[`product-description`],
			$_POST[`product-thumbnail`],
			$_POST[`product-images`],
			$_GET[`id`]
		]);

	header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;




	case "create":
$statement = $conn->prepare("INSERT INTO
			`products`
		(	`brand_name`,
			`name`,
			`price`,
			`quantity`,
			`category`,
			`description`,
			`thumbnail`,
			`images`,
			`date_create`,
			`date_modify`
		)
		VALUES(?,?,?,?,?,?,?,?,NOW(),NOW())
		");

$statement->execute([
			$_POST["product-brand_name"],
            $_POST["product-name"],
            $_POST["product-price"],
            $_POST["product-quantity"],
            $_POST["product-category"],
            $_POST["product-description"],
            $_POST["product-thumbnail"],
            $_POST["product-images"]
            
        ]);

        $id = $conn->lastInsertId();

		$statement->execute([
			$_POST["product-brand_name"],
			$_POST["product-name"],
			$_POST["product-price"],
			$_POST["product-quantity"],
			$_POST["product-category"],
			$_POST["product-description"],
			$_POST["product-thumbnail"],
			$_POST["product-images"]
		]);

		$id = $conn->lastInsertId();
	header("location:{$_SERVER['PHP_SELF']}?id=$id");
		break;



	case "delete":
		$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
		$statement->execute([$_GET['id']]);




	header("location:{$_SERVER['PHP_SELF']}");
		break;
}
}
} catch(PDOException $e) {
	die($e->getMessage());
}








// TEMPLATES

// this is the products page listing all of the items
function productListItem($r,$o) {

return $r.<<<HTML
<div>
<div class="card soft">
	<div class="display-flex">

		<div class="flex-none images_thumbs"><img src="$o->thumbnail"></div>
			<div class="flex-stretch">
				<div>$o->brand_name</div>
				<div>$o->name</div>
			</div>
		<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div></div>
	
	</div>
</div>
HTML;
}



// this is when you click into it, individual products

function showProductPage($o) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$images = array_reduce(explode(",", $o->images),function($r,$o){
	return $r."<img src='$o'>";
});

//heredoc

$display = <<<HTML
<div class="card soft">
<h3>$o->brand_name</h3>
<h2>$o->name</h2>


<div class="form-control">
<label class="form-label">Price</label>
<span>&dollar;$o->price</span>
</div>

<div class="form-control">
<label class="form-label">Quantity</label>
<span>$o->quantity</span>
</div>

<div class="form-control">
<label class="form-label">Category</label>
<span>$o->category</span>
</div>

<div class="form-control">
<label class="form-label">Description</label>
<span>$o->description</span>
</div>

<div class="form-control">
<label class="form-label">Thumbnail</label>
<span class="images_thumbs"><img src='$o->thumbnail'></span>
</div>

<div class="form-control">
<label class="form-label">Other Images</label>
<span class="images_thumbs">$images</span>
</div>
</div>

HTML;

$form = <<<HTML
<form  method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate" class="container card soft">
<h2> $addoredit Product</h2>

<div class="form-control">
<label class="form-label" for="product-brand_name">Brand Name</label>
<input class="form-input" name="product-brand_name" id="product-brand_name" type="text" value="$o->brand_name" placeholder="Enter Brand Name">
</div>


<div class="form-control">
<label class="form-label" for="product-name">Name</label>
<input class="form-input" name="product-name" id="product-name" type="text" value="$o->name" placeholder="Enter Product Name">
</div>


<div class="form-control">
<label class="form-label" for="product-price">Price</label>
<input class="form-input" name="product-price" id="product-price" type="number" min="0" max="10000" step="0.01" value="$o->price" placeholder="Enter Product Price">
</div>

<div class="form-control">
<label class="form-label" for="product-quantity">Quantity</label>
<input class="form-input" name="product-quantity" id="product-quantity" type="Number" min="0" max="10000" step="1" value="$o->quantity" placeholder="Enter Price Quantity">
</div>

<div class="form-control">
<label class="form-label" for="product-category">Category</label>
<input class="form-input" name="product-category" id="product-category" type="text" value="$o->category" placeholder="Enter Product Category">
</div>

<div class="form-control">
<label class="form-label" for="product-description">Description</label>
<textarea class="form-input" name="product-description" id="product-description" placeholder="Enter Product Description">$o->description</textarea>
</div>

<div class="form-control">
<label class="form-label" for="product-thumbnail">Thumbnail</label>
<input class="form-input" name="product-thumbnail" id="product-thumbnail" type="text" value="$o->thumbnail" placeholder="Enter Product Thumbnail">
</div>

<div class="form-control">
<label class="form-label" for="product-images">Other Images</label>
<input class="form-input" name="product-images" id="product-images" type="text" value="$o->images" placeholder="Enter Product Images">
</div>

<div class="form-control">
			<button class="form-button" type="sumbit" name="sumbit" value="Save Changes">Save Changes</button>
		</div>
</form>
HTML;


$output = $id == "new" ? "<div class='card soft'>$form</div>" :
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'>$display</div>
		<div class='col-xs-12 col-md-5'>$form</div>
	</div>
	";


$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML
<div class="card soft">
	<nav class="display-flex">
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
		<div class="flex-none">$delete</div>
	</nav>
</div>
$output
HTML;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>Product Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>

<body>
	
	<header class="navbar">
		<div class="container display-flex ">
			<div class="flex-none">
				<h1>Product Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</li>
				</ul>
			</nav>
		</div>
	</header>

<div class="container">

		<?php

			if(isset($_GET['id'])) {
				echo showProductPage(
					$_GET['id']=="new" ? 
						$empty_product:
						makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
					);
			} else {
			?>
	<h2>Product List</h2>
	
	<?php
	$result = makeQuery(makeConn(), "SELECT * FROM `products` ORDER BY `date_create` DESC");

	echo array_reduce($result,'productListItem');
		}
	?> 


<?php ?>
</div>

</body>