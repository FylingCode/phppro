<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Include</p>
    <?php include '1-date.php' ;
    echo "<br>";
    echo $demor;
    ?>


<!-- However, there is one big difference between include and require; 
 when a file is included with the include statement and PHP cannot find it, the script will continue to execute: -->


 <!-- 
 If we do the same example using the require statement, the echo statement will not be executed because the script 
 execution dies after the require statement returned a fatal error:
  -->
</body>
</html>