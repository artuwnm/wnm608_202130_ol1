<?php

include "../lib/php/functions.php";

$filename = "notes.json";
$file = file_get_contents($filename);
$notes_object = json_decode($file);

$filename = "notes.json";
$file = file_get_contents($filename);
$notes_object = json_decode($file);

// print_p($file);

$notes_object = file_get_json("notes.json");
$users = file_get_json("../data/users.json");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>Reading Data</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>

<div class="container">
	<div class="card soft">
		<h2>Users</h2>
		
	<?php

for($i=0;$i<count($users);$i++){
				echo "<li>
						<strong>{$users[$i]->name}</strong>
						<span>{$users[$i]->type}</span>
					</li>";
			}



	?>	





























	</div>
</div>

</body>
</html>