<?php 

include "../lib/php/functions.php";




$users = file_get_json("../data/users.json");




function showUserPage($user) {
	//print_p($user);

//<div>$user->name</div>       // heredoc  <<<adcdef  abcdef; is kind like a tag, inside is a string

$classes = implode(", ",  $user->classes);

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

HTML;


}







// file_put_contents   json_encode    explode    $_POST



function showUserForm($user) {
	//print_p($user);

//<div>$user->name</div>       // heredoc  <<<adcdef  abcdef; is kind like a tag, inside is a string



echo <<<HTML

<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>

<div>
	<h2>$user->name</h2>
	<div class="display-flex input_form">
    		<div class="default_form flex-none">
    			<h3>User Form</h3>

				<form action="lib/php/formData.php" method="POST">
					<div class="form-control">
						<label class="default-lable">Name</label>
						<input type="text" name="name" class="default-input" placeholder="Mindy Quan">
					</div>
					<div class="form-control">
						<label class="default-lable">Type</label>
						<input type="text" name="type" class="default-input" placeholder="Student">
					</div>
					<div class="form-control">
						<label class="default-lable">Email</label>
						<input type="text" name="email" class="default-input" placeholder="mquan4@art.edu">
					</div>
					<div class="form-control">
						<label class="default-lable">Classes</label>
						<input type="text" name="classes" class="default-input" placeholder="608 605 613">
					</div>

					<input type="submit" class="form-button button_filled1" value="Submit"/>
				</form>

				
				  

    		</div>

    		
	</div>

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
					        <li style="margin: 0 1em 0 1em;"><a href="admin/users.php">User List</a></li>
					        
				        </ul>
			        </nav>

					
			
				</div>
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

				for($i=0; $i<count($users); $i++){
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


	<div class="container">
		
		<div class="card soft">

			<?php 

			if(isset($_GET['id'])) {

				showUserForm($users[$_GET['id']]);

			} else {


			?>
			
			<h2>User Form</h2>

			<nav class="nav">
				<ul>

				<?php  

				for($i=0; $i<count($users); $i++){
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