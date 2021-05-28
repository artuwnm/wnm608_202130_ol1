<?php

include "../lib/php/functions.php";


//$filename = "notes.json";
//$file = file_get_contents($filename);
//$notes_object = json_decode($file);


$notes_object = file_get_json("notes.json");
$users_array = file_get_json("../data/users.json");



//print_p($notes);

?>
<! DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Reading Data</title>
	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../lib/css/gridsystem.css">
	<link rel="stylesheet" href="../css/storetheme.css">

</head>
<body>


	<div class="container">
		<h1>Reading Data</h1>
		<div class="card soft">
			<h2>Notes</h2>

		
			<?php

			for($i=0;$i<count($notes_object->notes);$i++){
				echo "<li>{$notes_object->notes[$i]}</li>";
			}


			?>
		</div>

	</div>


</body>
</html>









