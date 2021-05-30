<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

		<?php phpinfo(); ?>
		error_log = /public_html/aau/wnm608/wang.vivian/notes/php_error.log
		<configuration>
    <system.web>
        <customErrors mode="on"/>
    </system.web>
</configuration>
	

	<?php 
	echo "<div>Hello World</div>";

	echo "<div>Goodbye World</div>";

	//variables
	$a = 5;

	echo $a;


	//string interpolation
	echo "<div>I have a $a things</div>";
	echo '<div>I have a $a things</div>';



	//number
	//integer
	$b = 15;
	//float
	$b = 0.576;

	$b = 10;

	//string
	$name = "Yerguy 2";

	//boolean
	$isOn = true;




	//Math
	//PEMDAS
	echo 5 + 4 * 2;


	//concatenation
	echo "<div>b+a" . " = c</div>";
	echo "<div>$b+$a = ".($a+$b)."</div>";

	?>

	<hr>
	<div>This is my name</div>
	<div>
		
	<?php

		$firstname= "vivian";
		$lastname = "wang";
		$fullname = "$firstname $lastname";

		echo $fullname;

	?>


	<hr>
	<?php 



	//superglobal
	// ?name=vivian

	echo "<a href='?name=vivian'>visit</a><br>";
	echo "<div>My name is {$_GET['name']}</div>";

	//?name=vivian&type=textarea
	echo "<a href='?name=vivian&type=textarea'>visit</a><br>";
	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";

	 ?>

	 <hr>
	 <?php 


	//array

	 $colors = array("red","green","blue");

	 echo $colors[0];

	 echo "
	 	<br>$colors[0]
	 	<br>$colors[1]
	 	<br>$colors[2]


	 ";

	 echo count($colors);

	  ?>

	  <div style="color:<?= $colors[1] ?>">
	  	This text is green
	  </div>


	  <hr>
	  <?php 


	   // associative array

	  $colorsAssociative = [
	  	"red" => "#f00",
	  	"green" => "#0f0",
	  	"blue" => "#00f"


	  ];

	  echo $colorsAssociative['green'];
	  ?>

	  <hr>
	  <?php 

	  //casting
	  $c = "$a";
	  $d = $c*1;

	  $colorsObject = (Object)$colorsAssociative;

	  //echo $colorsObject;

	  echo "<hr>";

	  //array index notation
	  echo $colors[0]."<br>";
	  echo $colorsAssociative['red']."<br>";
	  echo $colorsAssociative[$colors[0]]."<br>";

	  // object Property Notation
	  echo $colorsObject ->red."<br>";
	  echo $colorsObject ->{$colors[0]}."<br>";

	   ?>


	   <hr>

	   <?php 


	   print_r($colors);
	   echo "<hr>";
	   print_r($colorsAssociative);
	   echo "<hr>";
	   echo "<pre>",print_r($colorsObject),"</pre>";


	   //function
	   function print_p($v) {
		
			echo "<pre>",print_r($v),"</pre>";

	   }

	   print_p($_GET);


	   ?>







	

	





	
</body>
</html>


















