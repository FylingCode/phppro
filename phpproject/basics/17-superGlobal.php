<?php

// Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - 
// and you can access them from any function, class or file without having to do anything special.

// The PHP superglobal variables are:

// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION

//🚨 $GLOBALS
// $GLOBALS is an array that contains all global variables.

$x = 75;

function myFunction(){
    echo $GLOBALS['x'];
} 
myFunction();

echo "<br>";
function myFunctions(){
    global $x;
    echo $x;
} 
myFunctions();


echo "<br>";
function myFunctionss(){
    $GLOBALS['i'] = 65; 
} 
myFunctionss();

echo $i;

//🚨 $_SERVER
// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];

//🚨 $_REQUEST
// $_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data.
// In other words, $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.

// <html>
// <body>
// <form method="post" action="demo_request.php">
//   Name: <input type="text" name="fname">
//   <input type="submit">
// </form>
// </body>
// </html>

//🚨 $_POST
// $_POST contains an array of variables received via the HTTP POST method.
// There are two main ways to send variables via the HTTP Post method:
// HTML forms
// JavaScript HTTP requests


//🚨 $_GET
// $_GET contains an array of variables received via the HTTP GET method.
// There are two main ways to send variables via the HTTP GET method:
// Query strings in the URL
// HTML Forms





?>