<?php
echo "Hello";
echo 'Hello';
echo "<br>";

// double quotes
$x = "John";
echo "Hello $x";
echo "<br>";


// single quotes
$x = "John";
echo 'Hello $x';
echo "<br>";

// do this 
$x = "John";
echo 'Hello . $x .';// same result
echo "<br>";

// do this
echo '<p>Study PHP at ' . $x . '</p>'; 
echo "<br>";


// length
echo strlen("Hello world!");
echo "<br>";


// word count
echo str_word_count("Hello world!");
echo "<br>";



// worde search first index
echo strpos("Hello world!", "world");

// to upper case
echo strtoupper("hello");

// reverse
echo "<br>";
echo strrev("hello world");

//
$oldtxt = "Hello World!";
$newtxt = str_replace("World", "Dolly", $oldtxt);
echo $newtxt;

// concatinate
echo "<br>";
$r = 4;
$f = 8;
$b = $r . $f;
echo($b);  //48

echo "<br>";
$ry = 4;
$rf = 8;
$rb = "$ry$rf";
echo($rb);  //48

$xt = "Hi, how are you?";
echo substr($xt, 5, -3);

echo "<br>";
$ri = 4;
$fi = 8;
$bi = "$ri . $fi";
echo $bi;

// remove white space (removes any whitespace from the beginning or the end:)
echo "<br>";
$vo = "h e l l o bh ai" ;
echo trim($vo);

//slice
echo "<br>";
$v = "hello";
echo substr("$v",1,3);

echo "<br>";
$vy = "hello bhai jaan";
echo substr("$vy",1);

echo "<br>";
$vy = "hello bhai jaan";
echo substr("$vy",-6);

// string to array
echo "<br>";
$xp = "Hello World!";
$yp = explode(" ", $xp);

//Use the print_r() function to display the result:
print_r($yp);

/*
Result:
Array ( [0] => Hello [1] => World! )
*/


// escape character
// $word = "We are the so-called "Vikings" from the north.";       // error

$x = "We are the so-called \"Vikings\" from the north.";


// Code	Result	
// \'	    Single Quote	
// \"	    Double Quote	
// \$	    PHP variables	
// \n	    New Line	
// \r	    Carriage Return	
// \t	    Tab	
// \f	    Form Feed	
// \ooo	Octal value	
// \xhh	Hex value	


?>