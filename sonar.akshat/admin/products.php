<?php 

include "../lib/php/functions.php";

$filename = "../data/products.json";
$products = file_get_json($filename);


$empty_product = (object)[
	"product_name"=>"",
	"product_description"=>"",
	"technical_specs"=>[],
	"price"=>""
];



// file_put_contents json_encode explode $_POST
// CRUD, Create Read Update Delete


// print_p([$_GET,$_POST]);

if(isset($_GET['action'])) {
	switch($_GET['action']) {
		case "update":
			$products[$_GET['id']]->product_name = $_POST['product-name'];
			$products[$_GET['id']]->product_description = $_POST['product-description'];
			$products[$_GET['id']]->technical_specs = explode(", ", $_POST['tech-specs']);
			$products[$_GET['id']]->price = $_POST['product-price'];

			file_put_contents($filename,json_encode($products));
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$empty_product->product_name = $_POST['product-name'];
			$empty_product->product_description = $_POST['product-description'];
			$empty_product->technical_specs = explode(", ", $_POST['tech-specs']);
			$empty_product->price = $_POST['product-price'];

			$id = count($products->products);

			$products->products[] = $empty_product;

			file_put_contents($filename,json_encode($products));
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			array_splice($products->products,$_GET['id'],1);
			file_put_contents($filename,json_encode($products->products));
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
}



function showUserPage($product) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$technical_specs = implode(", ", $product->technical_specs);

// heredoc
$display = <<<HTML
<head><style>
		h1 {font-family: aktiv-grotesk,sans-serif; font-weight: 700; font-style: bold; color: #2C23F7; padding-left: 50px;}
		h2 {font-family: aktiv-grotesk,sans-serif; font-weight: 700; font-style: bold; color: #2C23F7; padding-left: 50px;}
  		strong {font-family: aktiv-grotesk,sans-serif; font-weight: 700; font-style: bold; color: #2C23F7; padding-left: 50px;}
  		span {font-family: aktiv-grotesk,sans-serif; font-weight: 400; font-style: normal; padding-left: 20px;}
  		.form {margin-left: 50px;}
  		label {font-family: aktiv-grotesk,sans-serif; font-weight: 700; font-style: bold; color: #2C23F7;}
  		.definput {
		    display: inline-block;
		    border-width: 0;
		    outline: 0;
		    padding: 12px 50px;
		    font-family: aktiv-grotesk,sans-serif;
		    font-weight: 400;
		    font-style: normal;
		    box-shadow: 0 2px 20px rgba(0,0,0,0.2);
		    border-radius: 10px;
		    text-align: center;
		    margin-bottom: 25px;
		    margin-top: 15px;
		    color: grey;
		    width: 200px;
		}
		.definput:focus {
	   		border: 2.5px solid;
	    	border-color: #2B6FF7;
	    	box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    	}
    	.btn {
		    padding-left: 50px;
		    padding-top: 10px;
		    margin: 0;
		    padding-bottom: 50px;
		}
		.defbutton3 {
		    display: inline-block;
		    background: rgb(43,111,247);
		    background: linear-gradient(90deg, rgba(43,111,247,1) 35%, rgba(44,35,247,1) 100%);
		    border-width: 0;
		    font-family: aktiv-grotesk,sans-serif;
		    font-weight: 700;
		    font-style: normal;
		    font-size: 18px;
		    color: white;
		    width: 300px;
		    height: 50px;
		    outline: 0;
		    border-radius: 10px;
		    margin-left: 0px;
		    margin-top: 15px;
		}
		.defbutton3:hover {
		    background: linear-gradient(270deg, rgba(43,111,247,1) 35%, rgba(44,35,247,1) 100%);
		}
		.info {background-color: whitesmoke; padding-top: 5px; padding-bottom: 30px;}
		.back {margin: 0px;}
		.infopro {margin: 0px; padding-top: 70px; padding-bottom: 50px; background-color: whitesmoke;}
	</style></head>

<div class="infopro">
	<h2>$product->product_name</h2>
	<div>
		<strong>Description</strong>
		<span>$product->product_description</span>
	</div>
	<div>
		<strong>Price</strong>
		<span>$product->price</span>
	</div>
	<div>
		<strong>Technical Specs</strong>
		<span>$technical_specs</span>
	</div>
</div>
HTML;

$form = <<<HTML
<div><h2>$addoredit Product</h2></div>
<div class="form">
	<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
		<label for="product-name">Name</label><br>
		<input class="definput" name="product-name" id="product-name" type="text" value="$product->product_name" placeholder="Enter the Product Name"><br>
	
		<label for="product-description">Description</label><br>
		<input class="definput" name="product-description" id="product-description" type="text" value="$product->product_description" placeholder="Enter the Product Description"><br>
	
		<label for="tech-specs">Technical Specs</label><br>
		<input class="definput" name="tech-specs" id="tech-specs" type="text" value="$technical_specs" placeholder="Enter the Technical Specs, comma separated"><br>
	
	
		<label for="product-price">Price</label><br>
		<input class="definput" name="product-price" id="product-price" type="text" value="$product->price" placeholder="Enter the Price"><br>
	
		<input class="defbutton3" type="submit" value="Save">
	</form>
</div>
HTML;

$output = $id == "new" ? $form :
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'>$display</div>
		<div class='col-xs-12 col-md-5'>$form</div>
	</div>
	";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML
<nav class="navi">
	<ul class="back">
		<li><a href="{$_SERVER['PHP_SELF']}">Back $delete</a></li>
	</ul>
</nav>
$output
HTML;
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products Admin</title>
	<link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
	<link rel="stylesheet" type="text/css" href="../css/users.css">

	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<h1>Products Admin</h1>
			
		<div class="nav">
			<nav class="navi">
				<ul class="navii">
					<li><a class="nav1" href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a class="nav1" href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
				</ul>
			</nav>
		</div>

		

		<div>

			<?php 

			if(isset($_GET['id'])) {
				showUserPage($_GET['id'] == "new" ? $empty_product : $products->products[$_GET['id']]);
			} else {

			?>
			
			
			<nav class="listnav">
				<ul>
			<?php

			for($i=0;$i<count($products->products);$i++){
				echo "<li>
					<a href='{$_SERVER['PHP_SELF']}?id=$i'>{$products->products[$i]->product_name}</a>
				</li>";
			}

			?>
				</ul>
			</nav>

			<?php } ?>
		</div>
	</div>
	
</body>
</html>