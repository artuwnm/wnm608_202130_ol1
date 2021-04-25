<?php 

include "../lib/php/functions.php";

//$filename = "notes.json";
//$file = file_get_contents($filename); //return a string value of a text content of this document
//$notes_object = json_decode($file);


$notes_object = file_get_json("notes.json");
$users_array = file_get_json("../data/users.json");

//echo $file;

//print_p($notes);


?>

<!DOCTYPE html> <!-- html:5 -->

<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Reading Data</title>

	<?php include "../parts/meta.php"; ?>
</head>

<body>


	<?php include "../parts/header_nav.php"; ?>

	
	<div class="container">
		
		<div class="card soft">
			
			<h2>Notes</h2>

			<?php  

			for($i=0; $i<count($notes_object->notes); $i++){
				echo "<li>{$notes_object->notes[$i]}</li>";
			}


			?>

		</div>

		<div class="card soft">
			
			<h2>Users</h2>

			<?php  

			for($i=0; $i<count($users_array); $i++){
				echo "<li>
				<strong>{$users_array[$i]->name}</strong>
				<span>{$users_array[$i]->type}</span>
				</li>";
			}


			?>

		</div>

	</div>


</body>
</html>		