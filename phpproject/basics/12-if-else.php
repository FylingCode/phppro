<?php

// if
if (5 > 3) {
    echo "Have a good day!";
}
echo "<br>";
  
$t = 14;
if ($t < 20) {
  echo "Have a good day!";
}
echo "<br>";

$a = 200;
$b = 33;
$c = 500;
if ($a > $b && $a < $c ) {
  echo "Both conditions are true";
}
echo "<br>";

$a = 5;
if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
}
echo "<br>";

// if else
$t = date("H");
if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
echo "<br>";


$t = date("H");
if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
echo "<br>";

// nested
$a = 13;
if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}


// shorthand if
$a = 5;
if ($a < 10) $b = "Hello";
echo $b;
echo "<br>";

// if else shorthand
$a = 13;
$b = $a < 10 ? "Hello" : "Good Bye";
echo $b;
?>