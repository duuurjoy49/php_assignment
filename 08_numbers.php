<?php
// integers
echo PHP_INT_MAX . '<br>'; //9223372036854775807
echo PHP_INT_MIN . '<br>'; //-9223372036854775808
echo PHP_INT_SIZE . '<br>'; // 8

// is_int()
$x = 5985;
var_dump(is_int($x)); // true
$x = 59.85;
var_dump(is_int($x)); // false

// is_float() / is_double
$x = 10.365;
var_dump(is_float($x)); // true
var_dump(is_double($x)); // true

// is_finite() / is_infinite()
$x = 1.9e411;
var_dump($x); // INF

// is_nan()
$x = acos(8);
var_dump($x); // NAN

// is_numeric()
$x = 5985;
var_dump(is_numeric($x)); //true

$x = "5985";
var_dump(is_numeric($x)); //true

$x = "59.85" + 100;
var_dump(is_numeric($x)); //true

$x = "Hello";
var_dump(is_numeric($x)); //false

// Typecasting
//  float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast; // 23456
echo "<br>";

//  string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast; // 23456

?>