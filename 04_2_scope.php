<?php 
// global scope
$x = 10;
function testGlobalScope(){
    echo $x . '<br>'; // error
}
testGlobalScope();

echo $x . '<br>'; // output 10

//local scope
function testLocalScope(){
    $y = 5;
    echo $y . '<br>'; // 5
}
testLocalScope();

echo $y . '<br>'; // error

//global keyword
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y . '<br>'; // outputs 15

//GLOBALS[index] => is an array
$a = 5;
$b = 10;

function globalsTest() {
  $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

globalsTest();
echo $b . '<br>'; // outputs 15

// static keyword
function staticTest() {
    static $x = 0;
    echo $x . '<br>'; // output 0,1,2
    $x++;
  }
  
  staticTest();
  staticTest();
  staticTest();

?>