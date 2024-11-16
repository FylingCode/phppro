<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // In the example above, / is the delimiter, w3schools is the pattern that is being searched for, and i is a
    // modifier that makes the search case-insensitive.
    // The delimiter can be any character that is not a letter, number, backslash or space. The most common delimiter is the 
    // forward slash (/), but when your pattern contains forward slashes it is convenient to choose other delimiters such as # or ~.

    // The preg_match() function will tell you whether a string contains matches of a pattern.
    $str = "Visit W3Schools hii";
    $pattern = "/w3schools/i";
    echo preg_match($pattern, $str);

    //  The preg_match_all() function will tell you how many matches were found for a pattern in a string.
    echo "<br>";
    $strr = "The rain in SPAIN falls mainly on the plains.";
    $patternn = "/ain/i";
    echo preg_match_all($patternn, $strr);

    //The preg_replace() function will replace all of the matches of the pattern in a string with another string.
    $strrr = "Visit Microsoft!";
    $patternnn = "/microsoft/i";
    echo preg_replace($patternnn, "W3Schools", $strrr);
    ?>

<!-- m	Performs a multiline search (patterns that search for a match at the beginning or end of a string will now match 
 the beginning or end of each line) -->
    <h1>Regex Modifier: m</h1>

    <p>How many times does the phrase "you" occur at the beginning of a line in the text:</p>

    <pre>you are better than
you think</pre>

    <?php
    $txt = "you are better than\nyou think";
    $pattern = "/^you/m";
    echo preg_match_all($pattern, $txt);
    ?>

    <p>The matches were found here:</p>

    <pre>
<?php
echo preg_replace($pattern, "#", $txt);
?>  
</pre>

    <p>(Each match was replaced by a # character)</p>
</body>


<!-- 
// Regular Expression Patterns

Expression	        Description	
[abc]	            Find one or many of the characters inside the brackets	
[^abc]	            Find any character NOT between the brackets	
[a-z]	            Find any character alphabetically between two letters	
[A-z]	            Find any character alphabetically between a specified upper-case letter and a specified lower-case letter	
[A-Z]	            Find any character alphabetically between two upper-case letters.	
[123]	            Find one or many of the digits inside the brackets	
[0-5]	            Find any digits between the two numbers	
[0-9]	            Find any digits -->

<!-- 
// Metacharacters

Metacharacter	            Description	
|	                   Find a match for any one of the patterns separated by | as in: cat|dog|fish	
.	                   Find any character	
^	                   Finds a match as the beginning of a string as in: ^Hello	
$	                   Finds a match at the end of the string as in: World$	
\d	                   Find any digits	
\D	                   Find any non-digits	
\s	                   Find any whitespace character	
\S	                   Find any non-whitespace character	
\w	                   Find any alphabetical letter (a to Z) and digit (0 to 9)	
\W	                   Find any non-alphabetical and non-digit character	
\b	                   Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b	
\uxxxx	               Find the Unicode character specified by the hexadecimal number xxxx
-->

<!-- 
// Quantifiers


Quantifier	                      Description	
n+	                        Matches any string that contains at least one n	
n*	                        Matches any string that contains zero or more occurrences of n	
n?	                        Matches any string that contains zero or one occurrences of n	
n{3}	                    Matches any string that contains a sequence of 3 n's	
n{2, 5}	                    Matches any string that contains a sequence of at least 2, but not more that 5 n's	
n{3,}	                    Matches any string that contains a sequence of at least 3 n's

-->

<?php
// grouping
// Use grouping to search for the word "banana" by looking for ba followed by two instances of na:

$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str);

?>
</html>