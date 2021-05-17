<?php

include "../lib/php/functions.php";


$empty_product = (object)[
	"name"=>"Marble Table",
    "price"=>"3490.45",
    "category"=>"light fixture",
    "description"=>"Great marble",
    "thumbnail"=>"img 9.JPG",
    "images"=>"img 9.JPG",
    "quantity"=>"23"
];


//logic

try {
	$conn = makePDOConn();
	if(isset($_GET['action'])) {

	switch(@$_GET['action']) {

   		 case "update":
			$statement = $conn->prepare("UPDATE
            `products`
            SET
            `name`=?,
            `price`=?,
            `category`=?,
            `description`=?,
            `thumbnail`=?,
            `images`=?,
            `quantity`=?,
            `date_modify`=NOW()
            WHERE `id`=?
            ");
			$statement->execute([
            $_POST['product-name'],
            $_POST['price'],
            $_POST['category'],
            $_POST['description'],
            $_POST['thumbnail'],
            $_POST['images'],
            $_POST['quantity'],
            $_GET['id']
        ]);
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;



		case "create":
		$statement = $conn->prepare("INSERT INTO
				`products`(
					`name`,
          		    `price`,
           			`category`,
            		`description`,
            		`thumbnail`,
            		`images`,
            		`quantity`,
            		`date_create`,
            		`date_modify`
				)
				VALUES (?,?,?,?,?,?,?,NOW(),NOW())
				");


		$statement->execute([
				$_POST["product-name"],
				$_POST["price"],
				$_POST["category"],
				$_POST["description"],
				$_POST["thumbnail"],
				$_POST["images"],
				$_POST["quantity"]
			
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




//templates



function productListItem($r,$o) {

return $r.<<<HTML
<div class="card soft">
	<div class="display-flex">
		<div class="flex-none images-thumbs"><img src='img/$o->thumbnail'></div>
		<div class="flex-stretch" style="padding:1em">$o->name</div>
		<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
	</div>
</div>
HTML;
}



function showProductPage($o) {

	$id = $_GET['id'];
	$addoredit = $id == "new" ? "Add" : "Edit";
	$createorupdate = $id == "new" ? "create" : "update";
	$images = array_reduce(explode(",", $o->images),function($r,$o){return $r."<img src='img/$o'>";});


//heredoc


$display = <<<HTML
<div>
			<h2>$o->name</h2>
			<div class="form-control">
				<label class="form-label">Price</label>
				<span>&dollar;$o->price</span>
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
				<span class="images-thumbs"><img src='img/$o->thumbnail'></span>
			</div>
			<div class="form-control">
				<label class="form-label">Other Images</label>
				<span class="images-thumbs">$images</span>
			</div>
			
		</div>
HTML;



$form = <<<HTML



<div class="display-flex">
    <div class="flex-stretch">
        <a href="admin/">Back</a>
    </div>
    <div class="flex-none">
        [<a href="admin/?id=$id&action=delete">Delete</a>]
    </div>
</div>
<form class="card-basic" method="post" action="admin/?id=$id&action=$createorupdate">
    <h2>$addoredit Product</h2>
   <div class="form-control">
			<label class="form-label" for="product-name">Name</label>
			<input class="form-input" name="product-name" id="product-name" type="text" value="$o->name" placeholder="Enter the Product Name">
		</div>
    <div class="form-control">
        <label class="form-label" for="price">Price</label>
        <input class="form-input" id="price" name="price" type="number" min="1" max="10000" step="0.01" value="$o->price">
    </div>
    <div class="form-control">
        <label class="form-label" for="category">Category</label>
        <input class="form-input" id="category" name="category" type="text" value="$o->category">
    </div>
    <div class="form-control">
        <label class="form-label" for="description">Description</label>
        <textarea class="form-input" id="description" name="description">$o->description</textarea>
    </div>
    <div class="form-control">
        <label class="form-label" for="thumbnail">Thumbnail</label>
        <input class="form-input" id="thumbnail" name="thumbnail" type="text" value="$o->thumbnail">
    </div>
    <div class="form-control">
        <label class="form-label" for="images">Other Images</label>
        <input class="form-input" id="images" name="images" type="text" value="$o->images">
    </div>
    <div class="form-control">
        <label class="form-label" for="quantity">Quantity</label>
        <input class="form-input" id="quantity" name="quantity" type="text" value="$o->quantity">
    </div>
    <div class="form-control">
        <input class="form-button" type="submit" value="Confirm">
    </div>
</form>
HTML;





$output = $id == "new" ? "<div class='card soft'>$form</div>" :
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
		<div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
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
	<div class="container display-flex">
		<div class="flex-none">
			<h1>Product Admin</h1>
		</div>
		<div class="flex-stretch"></div>
		<nav class="nav nav-flex flex-none">
			<ul>
				<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
				<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
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
				//showProductPage();
			} else {
			?>

			<h2>Product List</h2>

				<?php 
				
				$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_create` DESC");
				echo array_reduce($result, 'productListItem');
				
				?>




		<?php } ?>
</div>


</body>
</html>











