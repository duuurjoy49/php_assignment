<?php
for ($x = 1; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "$x <br>";
}
/* output:
1
2
3 */

for ($x = 1; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "$x <br>";
  }
/* output:
1
2
3
5
6
7
8
9 */
?>