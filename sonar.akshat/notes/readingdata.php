<?php

include "../php/functions.php";

//$filename = "notes.json";
//$file = file_get_contents($filename);
//$notes_object = json_decode($file);

//$filename = "notes.json";
//$file = file_get_contents($filename);
//$notes_object = json_decode($file);

$notes_object = file_get_json("notes.json");
$users_array = file_get_json("../data/users.json");


// print_p($notes);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reading Data</title>
    <link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/notes.css">
</head>

<body>

	<?php include "../parts/navbar.php"; ?>
	
	<h2>Notes</h2>

	<?php 

	for($i=0;$i<count($notes_object->notes);$i++){
		echo "<li>{$notes_object->notes[$i]}</li>";

	}

	?>

	<div>
		<h2>Users</h2>
		<?php

		for($i=0;$i<count($users_array);$i++){
			echo "<li>
				<strong>{$users_array[$i]->name}</strong>
				<span>{$users_array[$i]->type}</span>
			</li>";
		}

		?>
	</div>
</body>