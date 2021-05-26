
<?php 

include_once "../php/functions.php";

$empty_product = (object)[
	"name"=>"Spiderman Miles Morales",
	"description"=>"Miles Morales discovers explosive powers that set him apart from his mentor, Peter Parker\r\n\r\nA war for power -a war for control of Marvel’s new York has broken out between a devious Energy Corporation and a high-tech criminal army\r\n\r\nA vibrant new home - traverse the snowy streets of his new, vibrant, and bustling neighborhood as Miles searches for a sense of belonging",
	"price"=>"3999",
	"category"=>"Discs",
	"thumbnail"=>"spiderman_front.jpg",
	"images"=>"spiderman_front.jpg,spiderman_side.jpg",

];






// LOGIC

	$conn = makePDOConn();
	try {
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
					`date_modify`=NOW()
				WHERE `id`=?
				");
			$statement->execute([
				$_POST['name'],
				$_POST['price'],
				$_POST['category'],
				$_POST['description'],
				$_POST['thumbnail'],
				$_POST['images'],
				$_GET['id']
			]);
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$statement = $conn->prepare("INSERT INTO
				`products`
				(
					`name`,
					`price`,
					`category`,
					`description`,
					`thumbnail`,
					`images`,
					`date_create`,
					`date_modify`
				)
				VALUES (?,?,?,?,?,?,NOW(),NOW())
				");
			$statement->execute([
				$_POST['name'],
				$_POST['price'],
				$_POST['category'],
				$_POST['description'],
				$_POST['thumbnail'],
				$_POST['images']
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
















//  TEMPLATES
function productListItem($r,$o) {
return $r.<<<HTML
<div><a href="{$_SERVER['PHP_SELF']}?id=$o->id">$o->name</a></div>
HTML;
}



function showProductPage($o) {

$id = $_GET['id'];
$addoredit = $id == 'new' ? 'Add' : 'Edit';
$createorupdate = $id == 'new' ? 'create' : 'update';
$images = array_reduce(explode(",", $o->images),function($r,$o){return $r."<div class='containerbox2'><img class='contimg' src='img/$o'></div>";});

// heredoc
$display = <<<HTML
<head>
<style>
		h1 {font-family: aktiv-grotesk,sans-serif; font-weight: 700; font-style: bold; color: #2C23F7; padding-left: 50px;}
		h2 {font-family: aktiv-grotesk,sans-serif; font-weight: 700; font-style: bold; color: #2C23F7; padding-left: 50px;}
  		strong {font-family: aktiv-grotesk,sans-serif; font-weight: 700; font-style: bold; color: #2C23F7; padding-left: 50px;}
  		span {font-family: aktiv-grotesk,sans-serif; font-weight: 400; font-style: normal;}
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
    	.definput2 {
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
		.definput2:focus {
	   		border: 2.5px solid;
	    	border-color: #2B6FF7;
	    	box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    	}
    	.btn {
		    padding-left: 0px;
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
		    background: linear-gradient(270deg, rgba(43,111,247,1) 35%, rgba(44,35,247,1) 100%);		}
		.info {background-color: whitesmoke; padding-top: 5px; padding-bottom: 30px;}
		.editpro {
			padding-left: 50px;
		}
		img {width: 100px;}
		.whole{display: flex;}
		.backbtn {
			display: inline-block;
		    border-width: 0;
		    width: 30px;
		    height: 30px;
		    outline: 0;
		    border-radius: 10px;
		    box-shadow: 0 2px 20px rgba(0,0,0,0.2);
		    margin-left: 50px;
		}
		.backbtn:hover {
			box-shadow: 0 2px 10px rgba(0,0,0,0.2);
		}

		.adminbtns {
    		display: flex;
		}

		.delbtn {
			display: inline-block;
		    background: white;
		    border-width: 0;
		    font-family: aktiv-grotesk,sans-serif;
		    font-weight: 700;
		    font-style: normal;
		    font-size: 18px;
		    color: #2C23F7;
		    box-shadow: 0 2px 30px rgba(0,0,0,0.2);
		    width: 100px;
		    height: 30px;
		    outline: 0;
		    border-radius: 10px;
		    transition: all 0.2s;
		    margin-left: 50px;
		}

		.delbtn:hover {
			background-color: red;
		    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
		}

		.dele {
    		color:black; font-style:normal; font-weight:400; padding: 18px;
		}

		.dele:hover {
			color: white; font-style:normal; font-weight:400;
		}

		.containerbox {
			box-shadow: 0 2px 30px rgba(0,0,0,0.2);
		    width: 150px;
		    height: 150px;
		    outline: 0;
		    border-radius: 10px;
		    overflow: hidden;
		}

		.contimg {
			display: block;
		  	margin-left: auto;
		  	margin-right: auto;
		  	margin-top: 18px;
		}

		.containerbox2 {
			box-shadow: 0 2px 30px rgba(0,0,0,0.2);
		    width: 150px;
		    height: 150px;
		    outline: 0;
		    border-radius: 10px;
		    overflow: hidden;
		    margin-top: 20px;
		    margin-right: 50px;
		}

	</style>
</head>

<div>
	<h2>$o->name</h2>
	<div style="padding-left: 50px;">
		<div>
			<label>Price</label><br>
			<span>&#8377; $o->price</span><br><br>
		</div>
		<div>
			<label>Category</label><br>
			<span>$o->category</span><br><br>
		</div>
		<div>
			<label>Description</label><br>
			<span><div style="padding-right: 50px;">$o->description</div></span><br><br>
		</div>
		<div>
			<label>Thumbnail</label><br><br>
			<span><div class="containerbox"><img src='img/$o->thumbnail' class="contimg"></span></div><br>
		</div>
		<div>
			<label>Images</label><br>
			<span style="display: flex;">$images</span><br><br>
		</div>
	</div>
</div>
HTML;

$form = <<<HTML
<div class="whole">
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<h2>$addoredit Product</h2>
	<div class="editpro">
		<div class="">
			<label class="" for="name">Name</label><br>
			<input class="definput" name="name" id="name" type="text" value="$o->name" placeholder="Enter the Product Name">
		</div>
		<div class="">
			<label class="" for="price">Price</label><br>
			<input class="definput" name="price" id="price" type="Number" min="0" max="100000" step="0.01" value="$o->price" placeholder="Enter the Price">
		</div>
		<div class="">
			<label class="" for="category">Category</label><br>
			<input class="definput" name="category" id="category" type="text" value="$o->category" placeholder="Enter the Product Category">
		</div>
		<div class="">
			<label class="" for="description">Description</label><br>
			<input class="definput2" name="description" id="description" type="text" value="$o->description" placeholder="Enter the Product Description">
		</div>
		<div class="">
			<label class="" for="thumbnail">Thumbnail</label><br>
			<input class="definput" name="thumbnail" id="thumbnail" type="text" value="$o->thumbnail" placeholder="Enter the Product Thumbnail">
		</div>
		<div class="">
			<label class="" for="images">Images</label><br>
			<input class="definput" name="images" id="`" type="text" value="$o->images" placeholder="Enter the Product Images">
		</div>
		
		<div class="btn">
			<input class="defbutton3" type="submit" value="Save Changes">
		</div>
	</div>
</form>
</div>
HTML;

$output = $id == "new" ? $form :
	"<div class=''>
		<div class=''>$display</div>
		<div class=''>$form</div>
	</div>
	";

$delete = $id == "new" ? "" : "<button class='delbtn'><a class='dele' href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a></button>";

echo <<<HTML
<nav>
	<div class="adminbtns">
		<div><a class="backbtn" style="padding-left: 0px; text-align: center; line-height: 30px; font-style: normal; font-weight: bold;" href="{$_SERVER['PHP_SELF']}">&#5176;</a></div>
		$delete
	</div>
</nav>
$output
HTML;

}




















?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Admin Page</title>
	<link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
	<link rel="stylesheet" type="text/css" href="../css/users.css">

	<?php include "../parts/meta.php";?>


	<style>
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
    	.definput2 {
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
		.definput2:focus {
	   		border: 2.5px solid;
	    	border-color: #2B6FF7;
	    	box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    	}
    	.btn {
		    padding-left: 0px;
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
		    width: 300px;
		}
		.backbtn {
			display: inline-block;
		    border-width: 0;
		    width: 30px;
		    height: 30px;
		    outline: 0;
		    border-radius: 10px;
		    box-shadow: 0 2px 20px rgba(0,0,0,0.2);
		    margin-left: 50px;
		}
		.backbtn:hover {
			box-shadow: 0 2px 10px rgba(0,0,0,0.2);
		}
		.editpro {
			padding-left: 50px;
		}
		label {font-family: aktiv-grotesk,sans-serif; font-weight: 700; font-style: bold; color: #2C23F7;}
	</style>
</head>
<body>
	<header class="navbar">
		<div class="">
			<div class="">
				<h1>Product Admin</h1>
			</div>
			<div>
				<nav>
					<ul>
						<li style="margin-left: 50px;"><a href="<?= $_SERVER['PHP_SELF'] ?>">Products List</a></li>
						<li style="margin-left: 50px;"><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<div>

		<?php 

			if(isset($_GET['id'])) {
				showProductPage(
					$_GET['id']=="new"?
						$empty_product :
						makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
			);

	
			} else {

				?>
				<h2>Product List</h2>

				<div style="padding-left: 100px;">
				<?php

				$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_create` ASC");

				echo array_reduce($result,'productListItem');

				?></div>

			<?php } ?>

	</div>
</body>
</html>