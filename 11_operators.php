<?php
/* PHP Operators
Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators */

// Arithmetic operators
$x = 4;
$y = 2;

echo $x + $y . '<br>'; // 6
echo $x - $y . '<br>'; // 2
echo $x * $y . '<br>'; // 8
echo $x / $y . '<br>'; // 2
echo $x % $y . '<br>'; // 0
echo $x ** $y . '<br>'; //x square y -> 4 square 2 -> 16

// String Operators
// concatenation
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2; //Hello world!

// concatenation assignment
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1; //Hello world!

?>