<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	
<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

echo "<div> Hello World </div>";

echo "<div> Goodbye World </div>";

// Variables, $ means variable, use "" to interpelate strings

$a = 5;

echo $a;

echo "<div>I have $a things</div>";
echo "<div>I have $a things</div>";

// Number
$b = 15;
// Float number
$b = .375;
// Literal number, number literal
$b = 10;

// Strings - string of characters, could be numbers, letters.. uses quotaion marks

$name = "String Text";


// Boolean - values that are True or False

$isOn = true;
$isOff = false;

// True-y and False-y are underfined and zero are kinda false, string and 1 are kinda true.


// Math

echo (5 - 4) * 2;


// Concatenation - combining strings together

 echo "<div>b + a" . " = c</div>";
 echo "<div>$b + $a = ".($a+$b)."</div>";


// Order of Operation


?>

<hr>
<div>This Is My Name</div>
<div>
	

<?php

$firstname = "Anastasia";
$lastname = "Ignatova";
$fullname = $firstname . " " . $lastname;
$fullname = "$firstname $lastname";


echo $fullname;

?>

<?php

// Superglobal
// in url after ? add *name*
// ?id=name

// echo $_GET['any word'];

echo "<a href='?name=Sia'>Visit</a><br>";
echo "<div> My name is {$_GET['name']} </div>";


// ?name=Sia&type=textarea
echo "<a href='?name=Sia&type=textarea'>Visit</a><br>";
echo "{$_GET['type']} My name is {$_GET['name']} {$_GET['type']}";

?>
<hr>


<?php
// Array
$colors = array("red","green","blue");

// to access the first item in the array, always starts with 0 

echo $colors[2]; 

echo "
<br>$colors[0] 
<br>$colors[1] 
<br>$colors[2] 
";


// to count the number of items in the array use function - count

echo count($colors);

?>

<!-- Using php outside of php -->
<div style="color: <?= $colors[1] ?>">
This text is green
</div>

<hr>

<?php
// Associative Array

$colorAssociative = [
	"red" => "#f00",
	"green" => "#0f0",
	"blue" => "#00f"
];

echo $colorAssociative['green'];

?>
<hr>

<?php
// Casting - take value of one type (objects, booleans, and turn into another type. 

$c = "$a";
$d = $c*1;

$colorAssociative = [
	"red" => "#f00",
	"green" => "#0f0",
	"blue" => "#00f"
];

$colorsObject = (object)$colorAssociative;

// echo $colorsObject;

echo "<hr>";

// Selecting items from arrays and objects

// Array Index Notation

echo $colors[0]."<br>";

echo $colorAssociative['red']."<br>";
echo $colorAssociative[$colors[0]]."<br>";

// Array Index Notation

echo $colorsObject->red."<br>";
echo $colorsObject->{$colors[0]}."<br>";


?>

<hr>

<?php

print_r($colors);
echo "<hr>";
print_r($colorAssociative);
echo "<hr>";
echo "<pre>",print_r($colorsObject),"</pre>";


// function - val the fun

function print_p($v) {

	echo "<pre>",print_r($v),"</pre>";
}

print_p($_GET);

// print_p($GLOBALS);

?>





















</body>
</html>