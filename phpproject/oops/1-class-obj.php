<?php
class fruit
{
    // proptioes
    public $name;
    public $favcolor;

    // methods

    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";




// 

class car{
    // properties
    public $carName;
    public $carColor;

    // method

function set_name($carName){
    $this->carName = $carName;
}
function get_name(){
   return $this->carName;
}

function set_color($carColor){
    $this->carColor =  $carColor;
}
function get_color(){
   return $this->carColor ;
}

}

$tata = new car();
$tata->set_name('Nano');
$tata->set_color('White');

echo "Name: " . $tata->get_name();
echo "<br>";
echo "Color: " . $tata->get_color();

// You can use the instanceof keyword to check if an object belongs to a specific class:

var_dump($tata instanceof car);


