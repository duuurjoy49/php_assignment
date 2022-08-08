<?php
// Key-value pair
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $value) {
  echo "Key=" . $x . ", Value=" . $value;
  echo "<br>";
}
/* output:
Key=Peter, Value=35
Key=Ben, Value=37
Key=Joe, Value=43 */
?>