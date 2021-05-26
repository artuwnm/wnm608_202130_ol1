<?php

include "../php/functions.php";

$filename = "../data/users.json";
$users = file_get_json($filename);


//print_p([$_GET,$_POST]);

if(isset($_GET['action'])) {
	switch ($_GET['action']) {
		case "update":
			$users[$_GET['id']]->name = $_POST['user-name'];
			$users[$_GET['id']]->type = $_POST['user-type'];
			$users[$_GET['id']]->email = $_POST['user-email'];
			$users[$_GET['id']]->classes = $_POST['user-classes'];

			file_put_contents($filename,json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			break;
		case "delete":
			break;	
	}
}



function showUserPage($user) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
//$classes = implode(", ", $user->classes);

//heredoc
echo <<<HTML
<head>
	<style>
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
	</style>
</head>
<div>
	<nav class="nav">
		<ul>
			<li><a href="users.php">Back</a></li>
		</ul>
	</nav>
</div>
<div class="info">
	<h2>$user->name</h2>
	<div>
		<strong>Type</strong>
		<span>$user->type</span>
	</div><br>
	<div>
		<strong>Email</strong>
		<span>$user->email</span>
	</div><br>
	<div>
		<strong>Classes</strong>
		<span>$user->classes</span>
	</div>
</div><br>
<div><h2>Edit User</h2></div>
<div class="form">
    <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=update">
    	<label for="user-name">Name</label><br>
        <input type="text" name="user-name" id="user-name" class="definput" value="$user->name" placeholder="name"><br>
    	<label for="user-type">Type</label><br>
    	<input type="text" name="user-type" id="user-type" class="definput" value="$user->type" placeholder="type"><br>
    	<label for="user-email">Email</label><br>
        <input type="email" name="user-email" id="user-email" class="definput" value="$user->email" placeholder="email"><br>
    	<label for="user-classes">Classes</label><br>
        <input type="text" name="user-classes" id="user-classes" class="definput" value="$user->classes" placeholder="classes"><br>
       
    	<input class="defbutton3" type="submit" value="Save">
		
	</form>
</div>
HTML;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Admin Page</title>
    <link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
    <link rel="stylesheet" href="../css/users.css">
    
    
</head>

<body>

	<h1>User Admin</h1>

	<div class="nav">
            <nav class="navi">
                <ul class="navii">
                    <li><a href="users.php" class="nav1">User List</a></li>
              	</ul>
            </nav> 
	</div>


	<?php

		if(isset($_GET['id'])) {
			showUserPage($users[$_GET['id']]);
		} else {

	

		?>

		
		<nav class="listnav"> 
			<ul>
		<?php

		for($i=0;$i<count($users);$i++){
			echo "<li>
				<a href='users.php?id=$i'>{$users[$i]->name}</a>
			</li>";
		}

		?>
			</ul>
		</nav>
		
	<?php } ?>


</body>