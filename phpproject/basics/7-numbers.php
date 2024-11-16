<?php
$x = 5985;
var_dump(is_int($x));

$xi = 67.8;
var_dump(is_float($xi));

$f = 1.9e411;
var_dump($f);

// is_nan()   // not a number

$xu = 5985;
var_dump(is_numeric($xu));

$xh = "hello";
var_dump(is_numeric($h));

// Cast float to int
$xj = 23465.768;
$int_cast = (int)$xj;
echo $int_cast;

echo "<br>";

// Cast string to int
$xii = "23465.768";
$int_cast = (int)$xii;
echo $int_cast;


?>