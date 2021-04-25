<?php 

include "../lib/php/functions.php";

$filename = "../data/users-test.json";
$users = file_get_json("$filename");


$empty_user = (object)[

	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[]

];





// file_put_contents   json_encode    explode    $_POST

//print_p([$_GET, $_POST]);

if(isset($_GET['action'])) {
	switch($_GET['action']) {
		case "update":
			$users[$_GET['id']]->name = $_POST['user-name'];
	    	$users[$_GET['id']]->type = $_POST['user-type'];
	    	$users[$_GET['id']]->email = $_POST['user-email'];
	    	$users[$_GET['id']]->classes = explode(", ", $_POST['user-classes']);

			file_put_contents($filename, json_encode($users));

			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");

			break;

		case "create":
			$empty_user->name = $_POST['user-name'];
	    	$empty_user->type = $_POST['user-type'];
	    	$empty_user->email = $_POST['user-email'];
	    	$empty_user->classes = explode(", ", $_POST['user-classes']);

	    	$id = count($users);

			$users[] = $empty_user;

			file_put_contents($filename, json_encode($users));

			header("location:{$_SERVER['PHP_SELF']}?id=$id");



			break;

		case "delete":

			array_splice($users, $_GET['id'],1);

			file_put_contents($filename, json_encode($users));

			header("location:{$_SERVER['PHP_SELF']}?");

			break;


	}
}




// function showUserPage($user) {
// 	print_p($user);

// <div>$user->name</div>       // heredoc  <<<adcdef  abcdef; is kind like a tag, inside is a string

// $classes = implode(", ",  $user->classes);

// echo <<<HTML

// <nav class="nav nav-crumbs">
// 	<ul>
// 		<li><a href="admin/users-test.php">Back</a></li>
// 	</ul>
// </nav>

// <div>
// 	<h2>$user->name</h2>
// 	<div>
// 		<strong>Type</strong>
// 		<span>$user->type</span>
// 	</div>
// 	<div>
// 		<strong>Email</strong>
// 		<span>$user->email</span>
// 	</div>
// 	<div>
// 		<strong>Classes</strong>
// 		<span>$classes</span>
// 	</div>

// HTML;


// }


function showUserForm($user) {
	//print_p($user);

//<div>$user->name</div>       // heredoc  <<<adcdef  abcdef; is kind like a tag, inside is a string

$classes = implode(", ", $user->classes);
$id = $_GET['id'];

$addoredit = $id == "new" ? "Add" : "Edit"; // if id(url) = new(string), than the value = Add, otherwise = Edit 
                                           

$createorupdate = $id == "new" ? "create" : "update";


$display = <<<HTML

<div>
	<h2>$user->name</h2>
	<div>
		<strong>Type</strong>
		<span>$user->type</span>
	</div>
	<div>
		<strong>Email</strong>
		<span>$user->email</span>
	</div>
	<div>
		<strong>Classes</strong>
		<span>$classes</span>
	</div>
</div>

HTML;



$form = <<<HTML

<div>
	<h2 style="margin-left: 13em;">$user->name</h2>
	<div class="display-flex input_form">
    		<div class="default_form flex-none">
    			<h3>User Forms</h3>

				<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">

					<h2>$addoredit User</h2>
					<div class="form-control">
						<label class="default-lable" for="user-name">Name</label>
						<input type="text" name="user-name" id="user-name" class="default-input" value="$user->name" placeholder="Enter the user name">
					</div>
					<div class="form-control">
						<label class="default-lable" for="user-type">Type</label>
						<input type="text" name="user-type" id="user-type" class="default-input" value="$user->type" placeholder="Enter the user type">
					</div>
					<div class="form-control">
						<label class="default-lable" for="user-email">Email</label>
						<input type="text" name="user-email" id="user-email" class="default-input" value="$user->email" placeholder="Enter the user email">
					</div>
					<div class="form-control">
						<label class="default-lable" for="user-classes">Classes</label>
						<input type="text" name="user-classes" id="user-classes" class="default-input" value="$classes" placeholder="Enter the user classes">
					</div>

					<div class="form-control" style="width: 12em; margin-top: 2em; margin-left: 8.3em;">
						<input type="submit" class="form-button button_filled1" value="Save Changes">
					</div>

				</form>

				

    		</div>

    		
	</div>

HTML;


$output = $id == "new" ?  $form :

	"<div class='grid gap'>
		<div class='col-xs-12 col-md-4'>$display</div>
		<div class='col-xs-12 col-md-8'>$form</div>

	</div>";


$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML

<nav class="display-flex">
	
	<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
	<div class="flex-none">$delete</div>

</nav>

$output

HTML;



}




?>




<!DOCTYPE html> <!-- html:5 -->

<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>User Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>

<body>


	<header class="container header_container">
    		

			<div class="header_bottom navigation1">
				<div class="logo" >
					<img src="img/placeholder_logo.png" alt="">
				</div>
						
				

				<div>
					
					<!--nav.nav>ul>li*4>a[href=#]>{link $}-->
			        <nav class="nav nav-flex navigation_real">
				        <ul>
					        <li style="margin: 0 1em 0 1em;"><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
					        <li style="margin: 0 1em 0 1em;"><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
					        
				        </ul>
			        </nav>

					
			
				</div>
			</div>
		
		

    </header>

	
	

	<div class="container">
		
		<div class="card soft">

			<?php 

			if(isset($_GET['id'])) {

				showUserForm($_GET['id'] == "new" ? $empty_user : $users[$_GET['id']]);

			} else {


			?>
			
			<h2>User Form</h2>

			<nav class="nav">
				<ul>

				<?php  

				for($i=0; $i<count($users); $i++){
					echo "<li>
					<a href='admin/users-test.php?id=$i'>{$users[$i]->name}</a>
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