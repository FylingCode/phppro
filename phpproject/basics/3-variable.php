<?php

//🚨
$name = "Abhishek";
echo "my name is $name";

// A variable starts with the $ sign, followed by the name of the variable
// A variable name must start with a letter or the underscore character
// A variable name cannot start with a number
// A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
// Variable names are case-sensitive ($age and $AGE are two different variables)

$x = 4 ;
$y = 5;
echo " <br> ";
echo $x + $y;

echo " <br> ";
$p = 5;
var_dump($p);

// 🚨 type and value
echo " <br> ";
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

// 🚨 assigning multiple values 
echo " <br> ";
$x = $y = $z = "Fruit";

echo $x;
echo $y;
echo $z;

//🚨variable scope (local/global/static)
// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
$xi = 5; // global scope
function myTestt() {
  // using x inside this function will generate an error
  //echo "<p>Variable x inside function is: $xi</p>";
}
myTestt();
echo "<p>Variable x outside function is: $xi</p>";

// A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
function myTest() {
    $xu = 6; // local scope
    echo "<p>Variable x inside function is: $xu</p>";
  }
  myTest();
  
  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: $xu</p>";

  // global keyword is used for accesd in function a global varibale
  $x = 5;
$y = 10;

function myTesty() {
  global $x, $y;
  $y = $x + $y;
}

myTesty();
echo $y; // outputs 15 

// PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
$x = 5;
$y = 10;

function uu() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

uu();
echo $y; // outputs 15


?>