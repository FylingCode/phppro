<?php
//
// String
// Integer
// Float (floating point numbers - also called double)
// Boolean
// Array
// Object
// NULL
// Resource

//The var_dump() function returns the data type and the value
$r = 4;
var_dump($r);
echo "<br>";

// string
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";

// intiger
$x = 5985;
var_dump($x);
echo "<br>";

// float
$x = 10.365;
var_dump($x);
echo "<br>";

// boolean
$x = true;
var_dump($x);
echo "<br>";

// array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "<br>";


// object
class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);

// Null
echo "<br>";
$x = "Hello world!";
$x = null;
var_dump($x);

// Change Data Type
echo "<br>";
$x = 5;
var_dump($x);

echo "<br>";
$x = "Hello";
var_dump($x);

echo "<br>";
$x = 5;
$x = (string) $x;
var_dump($x);

// resource
