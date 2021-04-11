<?php

include "../lib/php/functions.php";


$users = file_get_json("../data/users.json");

//file_put_contents json_encode  explode  $_POST

if(isset($_POST['submit'])){
	//echo "<h1>Test {$_POST['name']}</h1>";
	$id = $_GET['id'];
	$name = $_POST['name'];
	$type = $_POST['type'];
	$email = $_POST['email'];
	$classes = explode(", ", $_POST['classes']);
	saveToFile($id, $name, $type, $email, $classes);
	header("Refresh:0");
}

function saveToFile($id, $n, $t, $e, $c) {
	$users = file_get_json("../data/users.json");
	$users[$id]->name = $n;
	$users[$id]->type = $t;
	$users[$id]->email = $e;
	$users[$id]->classes = $c;
	file_put_contents("../data/users.json", json_encode($users));
}

function showUserPage($user){

	$classes = implode(", ", $user->classes);

	//heredoc
	echo <<<HTML
	<nav class="nav nav-crumbs">
		<ul>
			<li><a href="admin/users.php">Back</a></li>
		</ul>
	</nav>
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

	<h3>Edit User Information</h3>

		<form method="post">
			<label class="form-label">Name</label>
				<input name="name" type="text" placeholder="$user->name" value="$user->name" class="form-input">
			<label class="form-label">Type</label>
				<input name="type" type="text" placeholder="$user->type" value="$user->type" class="form-input">
			<label class="form-label">Email</label>
				<input name="email" type="email" placeholder="$user->email" value="$user->email" class="form-input">
			<label class="form-label">Classes</label>
				<input name="classes" type="search" placeholder="$classes" value="$classes" class="form-input">
			<div class="form-control">
				<input name="submit" type="submit" value="Submit" class="form-button">
			</div>
		</form>

		<!--<div class="form-control">
				<button class="form-button">Submit</button>
					</div>-->




	HTML;
}


?>




<! DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>User Admin Page</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>


	<div class="container">
		
		<div class="card soft">

			<?php

				if(isset($_GET['id'])){
					showUserPage($users[$_GET['id']]);

				} else{

			?>




			<h2>User List</h2>
		<nav class="nav">
			<ul>

				<?php

				for($i=0;$i<count($users);$i++){
					echo "<li>
						<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
					</li>";
				}


				?>
			</ul>
		</nav>

		<?php }?>

		</div>
	</div>


</body>
</html>





