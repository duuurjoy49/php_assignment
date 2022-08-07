<?php
/* PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource */

// string
$x = "Hello world!";
$y = 'Hello world!';

echo $x; //Hello World!
echo "<br>"; //new line
echo $y . '<br>'; // Hello World!

//integer
$a = 5985;
var_dump($a) ; // int(5985)
echo "<br>";
echo $a; // 5985

//float
$b = 10.365;
var_dump($b); // float(10.365)

//boolean
$x = true;
$y = false;

// array
$cars = array("Volvo","BMW","Toyota");
echo '<pre>';
var_dump($cars); // output the array
echo '</pre>';

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message(); //My car is a black Volvo!
  echo "<br>"; 
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message(); // My car is a red Toyota!
 echo '<br>';
$x = "Hello world!";
$x = null;
var_dump($x); // NULL

?>