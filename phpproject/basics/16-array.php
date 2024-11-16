<?php
$cars = array("Volvo", "BMW", "Toyota");

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo "<br>";

$carss = array("Volvo", "BMW", "Toyota");
var_dump($carss);

echo "<br>";
echo $carss[1];

// change value
echo "<br>";
$card = array("Volvo", "BMW", "Toyota");
$card[1] = "Ford";
var_dump($card);

echo "<br>";
foreach ($card as $x){
    echo "$x <br>";
}

array_push($card,"bhai");
foreach ($card as $y){
    echo "$y <br>";
}

// Associate Array
$cari = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($cari);
echo "<br>";
echo $cari ["model"];

// change value
$cari["year"]=2029;
echo "<br>";
echo $cari["year"];

// loop
echo "<br>";
foreach ($cari as $b => $n){
    echo "$b : $n <br>";
}

// create array
$abi = array("abhishek","singh","rajput","kripeka pura ala", " chambal te","tyre","mayae","doreme","loveily","goloioiyujht","mai nhi");
// also can use 
$ravu = ["dudhwala","metartod","motorcycle"];
//array ket
$keyray = [0=>"abhihek",
1=>"rajput",
2=>"megoan te"];
// decalre empty array
$emptatrr = [];
$emptatrr[0]="kahli";
$emptatrr[1]="nahi";
$emptatrr[2]="hu mai";
// declare a associate array or key array
$assoarr = [];
$assoarr["brand"]="Ford";
$assoarr["car"]="maeruti";
$assoarr["malik"]="no one";

// access array
echo "<br>";
echo $abi[1];

echo "<br>";
echo $keyray[0];

echo "<br>";
echo $assoarr["car"];

echo "<br>";
function myFunction(){
    echo "im from function";
}
$newr = array("abhi",15,myFunction());
echo $newr[2];


// update array
$abi[0]="mulayam";

$assoarr["brand"]="suzuki";

// add array item
$abi[]="mehtav";

$assoarr["color"]="red";

// multiple
array_push($abi,"love","kiush","liddghydngh");

$assoarr += ["mobile"=>"auto","enginer"=>"bagadbilla"];

// remove item from array
array_slice($abi,1,1);

unset($abi[1]);

// remove first and second
unset($abi[0],$abi[1]);

// remove item from associte array
unset($assoarr["color"]);

//$newarray = array_diff($cars, ["Mustang", 1964]);      // also a method to remove 

// last item remove
array_pop($abi);

// remove first itenm
array_shift($abi);


// sorting array
echo "<br>";
$mar = array("RAMU","ABHISHEK","RAHUL","HEMANT","KATARE","SATENDRA","SPONGE");
$another = array("A"=>"AKASH","B"=>"BAWE","C"=>"CHOR CHORI","D"=>"DORIMON","E"=>"A");

//$marshort = sort($mar);   // ascending sort
// echo $marshort;   // output is 1 only
// echo "<br>";

rsort($mar);   // decending sort
$len = count($mar);
for ($x=0;$x<$len;$x++){
    echo $mar[$x];
    echo "<br>";
}


// ksort($another);  // sort on bases of keys
// asort($another);  // sort on basdes of values
// arsort($another); // sort decensing on bases of value
krsort($another);  // decending on bases of key
foreach($another as $ty => $by){
    echo "$ty : $by";
    echo "<br>";
}


// multi dimentional array

$multi = array(
    array("Mehndra","Thar",500000),
    array("volks","polo",8000000),
    array("Tata","Nano",100000)
);

echo "Car Nmae is : " .$multi[0][0]. " car is : " .$multi[0][1]." Price Is : " .$multi[0][2];
echo "<br>";
echo "Car Nmae is : " .$multi[1][0]. " car is : " .$multi[1][1]." Price Is : " .$multi[1][2];
echo "<br>";
echo "Car Nmae is : " .$multi[2][0]. " car is : " .$multi[2][1]." Price Is : " .$multi[2][2];


for($row=0;$row<3;$row++){
    echo "<p> <b> Row number is : $row </b> </p>";
    echo "<ul>";
    for($col=0;$col<3;$col++){
        echo "<li>". $multi[$row][$col] ."</li>";
    }
    echo "</ul>";
}

?>