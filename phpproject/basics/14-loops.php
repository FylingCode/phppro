<?php
// while loop
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}

// break the loop when i become 3
$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}

// continue
$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}

// alternative
$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;


// count by 10
$i1 = 0;
while ($i1 < 100) {
  $i1+=10;
  echo `$i1 "<br>"`;
}


// do while
$i = 1;
do {
  echo $i;
  $i++;
} while ($i < 6);

// one time it will run bhale hi condition galat ho
$i = 8;
do {
  echo $i;
  $i++;
} while ($i < 6);

// break
$i = 1;
do {
    if ($i == 3) break;
    echo $i;
    $i++;
} while ($i < 6);


// continue
$i = 0;
do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);

// for loop
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br>";
}

for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo "The number is: $x <br>";
}
  
for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
}

// for each loop
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  echo "$x <br>";
}

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
}
$myCar = new Car("red", "Volvo");
foreach ($myCar as $x => $y) {
    echo "$x: $y <br>";
}

// break
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}

// continue
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}

// not affect
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}
var_dump($colors);

// affect
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}
var_dump($colors);

// altrnative
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) :
  echo "$x <br>";
endforeach;


?>