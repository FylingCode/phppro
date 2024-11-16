<?php
 class fruit{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro(){
        echo "Im  {$this->name} and my color is {$this->color}";
    }
 }

 class strawberry extends fruit{
    public function message(){
        echo " im from strawberry";
    }
 }

 $berry = new strawberry("berryyummy","redish");
 $berry->message();
 echo "<br>";
 $berry->intro();


 // Inheritance and the Protected Access Modifier

 

?>