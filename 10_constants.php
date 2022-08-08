<?php
// Syntax
// define(name, value, case-insensitive)

// case-sensitive
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING . '<br>'; // Welcome to W3Schools.com!

// case-insensitive
define("TEXT", "Welcome to W3Schools.com!", true);
echo text . '<br>'; //Welcome to W3Schools.com!

// Array Constant
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0] . '<br>';

// Constants are global
define("newText", "Welcome to W3Schools.com!");

function myTest() {
  echo newText;
}
 
myTest();

?>