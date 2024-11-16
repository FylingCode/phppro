<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

const MYCAR = "Volvo";
echo MYCAR;

define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
echo cars[0];

  
define("GREEETING", "Welcome to W3Schools.com!");
function myTest() {
  echo GREEETING;
}
myTest();


// __CLASS__   	If used inside a class, the class name is returned.	
// __DIR__	        The directory of the file.	
// __FILE__	     The file name including the full path.	
// __FUNCTION__	If inside a function, the function name is returned.	
// __LINE__	     The current line number.	
// __METHOD__	     used inside a function that belongs to a class, both class and function name is returned.	
// __NAMESPACE__	 If used inside a namespace, the name of the namespace is returned.	
// __TRAIT__	       If used inside a trait, the trait name is returned.	
// ClassName::class	Returns the name of the specified class and the name of the namespace, if any.  
?>