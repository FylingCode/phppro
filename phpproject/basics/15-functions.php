<?php
function myMessage()
{
    echo "Hello world!";
}
myMessage();

// multiple time same funtuion call
function familyName($fname)
{
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

// multiple argument
function familyNamee($fname, $year)
{
    echo "$fname Refsnes. Born in $year <br>";
}
familyNamee("Hege", "1975");
familyNamee("Stale", "1978");
familyNamee("Kai Jim", "1983");

// default argument

function setHeight($minheight = 50)
{
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

// returning value
function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

// referance
function add_five(&$value) {
    $value += 5;
}
$num = 2;
add_five($num);
echo $num;

// unknown argument values
function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }
    return $n;
}
  
$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;


function myFamily($lastname, ...$firstname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
      $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
  }
  
  $a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;

// loosely typed
function addNumbers(int $a, int $b) {
    return $a + $b;
  }
  echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10


// strict mode
// <?php declare(strict_types=1); // strict requirement

// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, "5 days");
// // since strict is enabled and "5 days" is not an integer, an error will be thrown
// ?>


 <?php declare(strict_types=1); // strict requirement
// function addNumbers(float $a, float $b) : float {
 // return $a + $b;
//}
//echo addNumbers(1.2, 5.2);
//?> 


<?php declare(strict_types=1); // strict requirement
//function addNumbers(float $a, float $b) : int {
 // return (int)($a + $b);
//}
//echo addNumbers(1.2, 5.2);