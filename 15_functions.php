<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function

// functions with parameters
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyName("Hege", "1975");
  familyName("Stale", "1978");
  familyName("Kai Jim", "1983");

  /* output:
  Hege Refsnes. Born in 1975
Stale Refsnes. Born in 1978
Kai Jim Refsnes. Born in 1983 */

//returning
function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = " . sum(2, 4);

/* output:
5 + 10 = 15
7 + 13 = 20
2 + 4 = 6 */
?>