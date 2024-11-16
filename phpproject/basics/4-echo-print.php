<?php
//🚨The echo statement can be used with or without parentheses: echo or echo().

echo "Hello";
//same as:
echo("Hello");

echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

//🚨When using single quotes, variables have to be inserted using the . operator, like this:
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
echo '<h2>' . $txt1 . '</h2>';
echo '<p>Study PHP at ' . $txt2 . '</p>';   
print '<p>Study PHP at ' . $txt2 . '</p>';  
print 'Study PHP at  . $txt2 . ';   



// 🚨print
print "Hello";
//same as:
print("Hello");
?>