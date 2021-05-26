<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
	 echo "<div>Hello World</div>";

	 echo "<div>Goodbye World</div>";

	 $a = 5;

	 echo $a;

	 // String Interpolation
	 echo "<div>I have $a things</div";
	 echo '<div>I have $a things</div';

	 // Number
	 // Integer
	 $b = 15;
	 // Float
	 $b = 0.576;

	 $b = 10;

	 // String
	 $name = "Akshat 2";

	 // Boolean 
	 $isOn = true;

	 // Math
	 // PEMDAS
	 echo (5 - 4) * 2;

	 // Concatenation
	 echo "<div>b + a" . " = c</div>";
	 


	 ?>

	 <hr>
	 <div>This is my Name</div>
	 <div>

	 <?php

	 $firstname = "Akshat";
	 $lastname = "Sonar";
	 $fullname = "$firstname $lastname";

	 echo $fullname;

	 ?>

	<hr>
	<?php

	// Superglobals
	// ?name=Akshat
	echo $_GET['name'];

	?>
	<hr>
	<?php

	//Array
	$colors = array("red","green","blue");

	echo $colors[0];

	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]

	";

	echo count($colors);


	?>

	<div style="color: <?= $colors[1] ?>">
		This text is green
	</div>

	<hr>
	<?php

	// Associative Array
	$colorAssocitive = [
		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "#00f"
	];

	echo $colorAssocitive['green'];
	?>
	<hr>
	<?php

	//Casting
	$c = "$a";
	$d = $c*1;


	?>
	<hr>

	<?php
     
     echo "<hr>";

     //Array Index Notation
     echo $colors[0]."<br>";
     echo $colorAssocitive['red']."<br>";
     echo $colorAssocitive[$colors[0]]."<br>";

     //Object Notationo
     //echo $colorsObject->red."<br>";

	?>




</body>
</html>