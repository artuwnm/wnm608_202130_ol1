<?php

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");


function showUserPage($user) {

$classes = implode(", ",  $user->classes);


echo <<<HTML
<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>
<form>
	<div class="form-control">
		<label class="form-label">Name</label>
		<input class="form-input" type="text" value="$user->name">
	</div>
	<div class="form-control">
		<label class="form-label">Type</label>
		<input class="form-input" type="text" value="$user->type">
	</div>
	<div class="form-control">
		<label class="form-label">Email</label>
		<input class="form-input" type="text" value="$user->email">
	</div>
	<div class="form-control">
		<label class="form-label">Classes</label>
		<input class="form-input" type="text" value="$user->classes">
	</div>
	<div class="form-control">
		<input class="form-button" type="submit" value="Save Changes">
	</div>


</form>
HTML;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Admin Page</title>

	<meta name="viewport" content="width=device-width">	
	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../lib/css/gridsystem.css">
	<link rel="stylesheet" href="../css/storetheme.css">

	<base href="http://kunweidesign.com/aau/wnm608_202130_ol1/jin.Kunwei/">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
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

			if(isset($_GET['id'])) {
				showUserPage($users[$_GET['id']]);
			} else {

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

			<?php } ?>	
		</div>
	</div>

</body>
</html>