<?php 

include "../lib/php/functions.php";

// $product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];


$empty_product = (object)[

	"name"=>"Diamond Bracelet",
	"thumbnail"=>"jewelry/bracelet3_thumb.png",
	"images"=>"jewelry/bracelet3_thumb.png,jewelry/bracelet3_wear.jpeg",
	"price"=>"950",
	"category"=>"Bracelet",
	"quantity"=>"25",
	"description"=>"This beauty features bezel set diamonds that run the length of the dazzling design."
	


];



//Logic

try {

	$conn = makePDOConn();
	if(isset($_GET['action'])) {

	switch($_GET['action']) { 

		case "update":

			$statement = $conn->prepare("UPDATE
				`products`
				SET
					`name`=?,
					`thumbnail`=?,
					`images`=?,
					`price`=?,
					`category`=?,
					`quantity`=?,
					`description`=?,
					`date_modify`=NOW()
				WHERE `id`=?

				");

			$statement->execute([
				$_POST['product-name'],
				$_POST['product-thumbnail'],
				$_POST['product-images'],
				$_POST['product-price'],
				$_POST['product-category'],
				$_POST['product-quantity'],
				$_POST['product-description'],
				$_GET['id']

			]);

			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");

			break;


		case "create":

			$statement = $conn->prepare("INSERT INTO
				`products`
				(
					`name`,
					`thumbnail`,
					`images`,
					`price`,
					`category`,
					`quantity`,
					`description`,
					`date_create`,
					`date_modify`

				)
				VALUES (?,?,?,?,?,?,?,NOW(),NOW())

				");

			$statement->execute([
				$_POST["product-name"],
				$_POST["product-thumbnail"],
				$_POST["product-images"],
				$_POST["product-price"],
				$_POST["product-category"],
				$_POST["product-quantity"],
				$_POST["product-description"]
			
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











//Templates

function productListItem($r,$o) {
return $r.<<<HTML
<div class="card soft" style="margin-bottom: 2em;">
	<div class="display-flex">
	 	<div class="flex-none image-thumbs"><img src='img/$o->thumbnail'></div>
	 	<div class="flex-stretch adminProduct_title">$o->name</div>
	 	<div class="flex-none adminProduct_button"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button button_filled1">Edit</a></div>
	</div>
</div>
HTML;
}




function showProductPage($o) {

$id = $_GET['id'];

$images = array_reduce(explode(",", $o->images),function($r,$o){return $r."<img src='img/$o'>";});

$addoredit = $id == "new" ? "Add" : "Edit"; // if id(url) = new(string), than the value = Add, otherwise = Edit 
                                           

$createorupdate = $id == "new" ? "create" : "update";


$display = <<<HTML

<div class="admin_info">
	<h2>$o->name</h2>
	<div class="form-control" style="margin-top: -1.5em;">
		<label class="form-label edit_info">Thumbnail:</label>
		<div class="image-main1"><img src='img/$o->thumbnail'></div>
	</div>
	<div class="form-control" style="margin-top: -1em;">
		<label class="form-label edit_info">Images:</label>
		<div class="image-thumbs">$images</div>
	</div>
	<div class="form-control" style="margin-top: 1em;">
		<label class="form-label edit_info">Price:</label>
		<span class="edit_content">&dollar;$o->price</span>
	</div>
	<div class="form-control" style="margin-top: 1em;">
		<label class="form-label edit_info">Category:</label>
		<span class="edit_content">$o->category</span>
	</div>
	<div class="form-control" style="margin-top: 1em;">
		<label class="form-label edit_info">Quantity:</label>
		<span class="edit_content">$o->quantity</span>
	</div>
	<div class="form-control" style="margin-top: 0.8em;">
		<label class="form-label edit_info">Description:</label>
		<div class="edit_content" style="width: 390px; line-height: 1.5em; margin-bottom: 3em;">$o->description</div>
	</div>

</div>

HTML;



$form = <<<HTML

<div>
	
	<div class="display-flex input_form1">
    		<div class="default_form1 flex-none">
    			

				<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">

					<h2>$addoredit Product</h2>
					<div class="form-control">
						<label class="default-lable edit_info1" for="product-name">Name:</label>
						<input type="text" name="product-name" id="product-name" class="default-line edit_content1" value="$o->name" placeholder="Enter the product name" style="font-style: normal; font-size: 0.9em;">
					</div>
					<div class="form-control">
						<label class="default-lable edit_info1" for="product-thumbnail">Thumbnail:</label>
						<input type="text" name="product-thumbnail" id="product-thumbnail" class="default-line edit_content1" value="$o->thumbnail" placeholder="Enter the product thumbnail"  style="font-style: normal; font-size: 0.9em;">
					</div>
					<div class="form-control">
						<label class="default-lable edit_info1" for="product-images">Images:</label>
						<input type="text" name="product-images" id="product-images" class="default-line edit_content1" value="$o->images" placeholder="Enter the product images" style="font-style: normal; font-size: 0.9em;">
					</div>
					<div class="form-control">
						<label class="default-lable edit_info1" for="product-price">Price:</label>
						<input type="number" name="product-price" id="product-price" min="0" max="10000" step="0.01" class="default-line edit_content1" value="$o->price" placeholder="Enter the product price" style="font-style: normal; font-size: 0.9em;">
					</div>
					<div class="form-control">
						<label class="default-lable edit_info1" for="product-category">Category:</label>
						<input type="text" name="product-category" id="product-category" class="default-line edit_content1" value="$o->category" placeholder="Enter the product category" style="font-style: normal; font-size: 0.9em;">
					</div>
					<div class="form-control">
						<label class="default-lable edit_info1" for="product-quantity">Quantity:</label>
						<input type="number" name="product-quantity" id="product-quantity" max="500" min="0" step="1" class="default-line edit_content1" value="$o->quantity" placeholder="Enter the product quantity" style="font-style: normal; font-size: 0.9em;">
					</div>
					<div class="form-control">
						<label class="default-lable edit_info1" for="product-description">Description:</label>
						<textarea name="product-description" id="product-description" class="default-input edit_content1" placeholder="Enter the product description" style="font-style: normal; line-height: 1.5em; font-size: 0.9em; width: 100%;">$o->description</textarea>  
					</div>

					<div class="form-control" style="width: 10em; text-align: right; margin-bottom: 4em;">
						<input type="submit" class="form-button button_filled1" value="Save Changes">
					</div>

				</form>

				

    		</div>

    		
	</div>

HTML;


$output = $id == "new" ?  "<div class='admin_form'>$form</div>":

	"<div class='grid gap'>
		<div class='col-xs-12 col-md-6'><div class='card soft display'>$display</div></div>
		<div class='col-xs-12 col-md-6'><div class='admin_form'>$form</div></div>

	</div>";


$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML


<nav class="display-flex container admin_button" style="margin-top: 3em; margin-bottom: 2em;">
		
	<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}">&#8636;Back</a></div>
	<div class="flex-stretch"></div>
	<div class="flex-none delete_product" >$delete</div>
	
</nav>


$output

HTML;
}






?>


<!DOCTYPE html> <!-- html:5 -->

<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>

<body style="background-color: white; padding: 0;">

	<div style="background-color: #e5c2c1; width: 100%; height: 2em;">
		
	</div>

	<header class="container header_container" style="margin-bottom: 0; margin-top: 0;">
    		

		<div class="display-flex">
			<div class="flex-none">
				
				<h2 class="admin_title">Product Admin</h2>
		
			</div>
			
			<div class="flex-stretch"></div>			
		<!--nav.nav>ul>li*4>a[href=#]>{link $}-->
		    <nav class="nav nav-flex navigation_real flex-none">
			    <ul style="margin-top: -0.3em;">
				    <li style="margin: 0 1em 0 1em; text-decoration: underline;"><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
				    <li style="margin: 0 1em 0 1em; text-decoration: underline;"><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
					        
			    </ul>
		    </nav>

		</div>
			
	</header>



    <div class="container individual_item">
    	
		<h2 class="admin_productlist">Product List</h2>
		
		<div class="divide_line1" style="margin-top: -1.2em;"></div>
    </div>





	<div class="container" style="margin-bottom: 4em; margin-top: 2em;">
		
		<?php 

			if(isset($_GET['id'])) {

				
				 // showProductPage(
				 // 	$_GET['id']=='new' ?
					// $empty_product :
				 // 	array_find($product,function($o){
					// 	return $o->id==$_GET['id'];
					// 	})
				 // 	);

				// if($_GET['id']=='new') {
				// 	showProductPage( $empty_product );
				// } else {
				// 	$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`='{$_GET['id']}'");
				// 	showProductPage( $result[0] );
				// }
				
				showProductPage(
					$_GET['id']=="new" ?
						$empty_product :
						makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]

				);

				//showProductPage();

			} else {


				?>

				<div>

				<?php  

				$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_create` DESC");

				//$result = getData("SELECT * FROM `products`");

				echo array_reduce($result,'productListItem');


				?>



			<?php } ?>

			</div>
			
</div>







    







	


</body>
</html>

