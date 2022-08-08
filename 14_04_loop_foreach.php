<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $i) {
  echo "$i <br>";
}
/* output -
red
green
blue
yellow */

// Associative array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $value) {
  echo "$x = $value<br>";
}
/* output:
Peter = 35
Ben = 37
Joe = 43 */
?>