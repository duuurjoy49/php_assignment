<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars); // sorts accending alphabetically

$numbers = array(4, 6, 2, 22, 11);
sort($numbers); // accending numerical order

$cars = array("Volvo", "BMW", "Toyota");
rsort($cars); //sorts descending alphabetically

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);// descending numerical order

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age); // accending according to value

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age); // accending according to key

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);// descending according to value

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);// descending according to key

?>