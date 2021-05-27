<?php 

include_once "../lib/php/functions.php";

$empty_product = (object)[
	"title"=>"",
	"price"=>"",
	"description"=>"",
	"category"=>"",
	"thumbnail"=>"",
	"images"=>"",
	"size"=>""
];



// LOGIC

	
try {
	$conn = makePDOConn();
	switch(@$_GET['action']) {
		case "update":
			$statement = $conn->prepare("UPDATE
				`products`
				SET 
					`title`=?,
					`price`=?,
					`category`=?,
					`description`=?,
					`thumbnail`=?,
					`images`=?,
					`date_modified`=NOW()
				WHERE `id`=?
				");
			$statement->execute([
				$_POST['product-title'],
				$_POST['product-price'],
				$_POST['product-category'],
				$_POST['product-description'],
				$_POST['product-thumbnail'],
				$_POST['product-images'],
				$_GET['id']
			]);
			
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$statement = $conn->prepare("INSERT INTO
				`products`
				(
					`title`,
					`price`,
					`category`,
					`description`,
					`thumbnail`,
					`images`,
					`date_created`,
					`date_modified`
				)
				VALUES (?,?,?,?,?,?,NOW(),NOW())
				");
			$statement->execute([
				$_POST['product-title'],
				$_POST['product-price'],
				$_POST['product-category'],
				$_POST['product-description'],
				$_POST['product-thumbnail'],
				$_POST['product-images']
			]);
			$id = $conn->lastInsertId();
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			$statement = $conn->prepare("DELETE FROM `products` WHERE `id`=?");
			$statement->execute([$_GET['id']]);
			header("location:{$_SERVER['PHP_SELF']}");
			break;
		default: break;
	}
} catch (PDOException $e) {
	die($e->getMessage());
}




//TEMPLATES

function productListItem($r,$o) {
return $r . <<<HTML
<div class="card soft">
	<div class="display-flex">
		<div class="flex-none images-thumbs"><img src='img/$o->thumbnail'></a></div>
		<div class="flex-stretch" style="padding:1em">$o->title</div>
		<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
	</div>
</div>
HTML;
}


function showProductPage($o) {
$addoredit = $_GET['id'] == "new" ? "Add" : "Edit";
$createorupdate = $_GET['id'] == "new" ? "create" : "update";
$images = array_reduce(explode(",", $o->images),function($r,$o){return $r."<img src='img/$o'>";});



//heredoc

$display = <<<HTML

<div>
	<h2>$o->title</h2>
	<div class="form-control">
		<div class="form-label">
			<label>Price</label><br>
			<span>&dollar; $o->price</span><br><br>
		</div>
		<div class="form-label">
			<label>Category</label><br>
			<span>$o->category</span><br><br>
		</div>
		<div class="form-label">
			<label>Description</label><br>
			<span>$o->description</span><br><br>
		</div>
		<div class="form-label">
			<label>Thumbnail</label><br><br>
			<span><img src='img/$o->thumbnail'></span><br>
		</div>
		<div class="form-label">
			<label>Images</label><br>
			<span>$images</span><br><br>
		</div>
	</div>
</div>
HTML;



$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$o->id&action=$createorupdate">
	<h2>$addoredit Product</h2>
	<div>
		<div class="form-control">
			<label class="form-label" for="product-title">Title</label><br>
			<input class="form-input" name="product-title" id="product-title" type="text" value="$o->title" placeholder="Enter the Product Title">
		</div>
		<div class="form-control">
			<label class="form-label" for="product-price">Price</label><br>
			<input class="form-input" name="product-price" id="product-price" type="Number" min="0" max="1000" step="0.01" value="$o->price" placeholder="Enter the Price">
		</div>
		<div class="form-control">
			<label class="form-label" for="product-category">Category</label><br>
			<input class="form-input" name="product-category" id="product-category" type="text" value="$o->category" placeholder="Enter the Product Category">
		</div>
		<div class="form-control">
			<label class="form-label" for="product-description">Description</label><br>
			<textarea class="form-input" name="product-description" id="product-description" placeholder="Enter the Product Description">$o->description</textarea>
		</div>
		<div class="form-control">
			<label class="form-label" for="product-thumbnail">Thumbnail</label><br>
			<input class="form-input" name="product-thumbnail" id="product-thumbnail" type="text" value="$o->thumbnail" placeholder="Enter the Product Thumbnail">
		</div>
		<div class="form-control">
			<label class="form-label" for="product-images">Images</label><br>
			<input class="form-input" name="product-images" id="product-images" type="text" value="$o->images" placeholder="Enter the Product Images">
		</div>
		
		<div class="form-control">
			<input class="form-button" type="submit" value="Submit">
		</div>
	</div>
</form>
HTML;



$output = $id == "new" ? "<div class='card soft'>$form</div>" :
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
		<div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
	</div>
	";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$o->id&action=delete'>Delete</a>";


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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Admin Page</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Product Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
					<li><a href="styleguide/index.html">Style Guide</a></li>
				</ul>
			</nav>
		</div>
	</header>


	<div class="container">
		<?php 

		if(isset($_GET['id'])) {
			
			showProductPage(
				$_GET['id']=="new" ?
					$empty_product : 
					makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
			);
		} else {

			?>
			<h2>Product List</h2>

			<?php

			$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_created` DESC");

			echo array_reduce($result,'productListItem');

			?>

		<?php } ?>



	</div>

</body>
</html>