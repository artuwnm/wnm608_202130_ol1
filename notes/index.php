<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
    
	<?php

	echo "<div>Hello World</div>";
	echo "<div>Goodbye World</div>";

	// space doesn't work in the echo phrase, but it works in the html tag. e.g echo "<div> Hello World </div>";

	// variables
	$a = 5;
	echo $a;

	// string interpolation
	echo "<div>I have $a things</div>";
	echo '<div>I have $a things</div>';  //single and double quotes are different in php


	// number php can have multiple values for $b, but 15 not equal to 10, 10 is 10

	// integer
	$b = 15;

	// float
	$b = 0.567;

	$b = 10;


	// string shoule always have double quotes
	$name = "MQ2";


	// boolean  true / false
	$isOn = true;


	// math
	echo 5 + 4 - 2;

	//PEMDAS
	echo 5 - 4 * 2;
	echo (5 - 4) * 2;

	// concatenation   using period to connect  
	echo "<div>b + a" . " = c</div>";
	echo "<div>$b + $a = ".($a+$b)."</div>";

	?>


	<hr>
	<div>This is a name</div>

	<?php 

	$firstname = "Ming";
	$lastname = "Quan";
	$fullname = "$firstname $lastname";  //$fullname = $firstname ." ". $lastname;

	echo $fullname;

	?>
	



	<hr>
	<?php 

	// superglobal
	// ?name=Quan
	//echo $_GET['name'];
	echo "<a href='?name=Quan'>visit</a>";

	echo "<div>My name is {$_GET['name']}</div>";

	echo "<a href='?name=Quan&type=h1'>visit</a>";

	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";  // ?name=Quan&type=h1

	?>
	


	<hr>
	<?php 

	$colors = array("red", "green", "blue");

	echo $colors[0];  //array index get value e.g echo $colors[1]; [2];


	echo "

		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]

	";

	echo count($colors);

	?>


	<div style="color:<?= $colors[1]; ?>">    
		This text is green
	</div>
    
	

	<hr>
	<?php 

	//associative array
	$colorsAssociative = [

		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "#00f"       // => set value    array needs to use comma in between
 		];

 		echo $colorsAssociative['green'];

	?>



	<hr>
	<?php 

	$c ="$a";  //string
	$d = $c*1;   //number

	$colorsObject = (object)$colorsAssociative;

	//echo $colorsObject; 

	echo "<hr>";

	// array index notation
	echo $colors[0]."<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";  // use array colorsAssociative[$colors[0]] to get the value #f00


	// object property notation
	echo $colorsObject -> red."<br>";   // object -> select
	echo $colorsObject -> {$colors[0]}."<br>";

	?>


	<hr>
	<?php 

	print_r($colors);
	echo "<hr>";
	print_r($colorsAssociative);
	echo "<hr>";
	echo "<pre>",print_r($colorsObject),"</pre>";


	// function
	function print_p($v) {

		echo "<pre>",print_r($v),"</pre>";

	}

	print_p($_GET)


	?>






















</body>
</html>