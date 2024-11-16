<?php
function my_callback($item){
    return strlen($item);
}

$stringa = array("first","second","third","Fourth");
$len = array_map("my_callback", $stringa);
print_r($len );

// or just write one line 
// $lengths = array_map( function($item) { return strlen($item); } , $strings);


function exclaim($str) {
    return $str . "! ";
  }
  
  function ask($str) {
    return $str . "? ";
  }
  
  function printFormatted($str, $format) {
    // Calling the $format callback function
    echo $format($str);
  }
  
  // Pass "exclaim" and "ask" as callback functions to printFormatted()
  printFormatted("Hello world", "exclaim");
  printFormatted("Hello world", "ask");
?>