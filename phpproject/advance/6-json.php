<?php
// JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.

// The json_encode() function is used to encode a value to JSON format.

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo json_encode($age);
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
echo json_encode($cars);
echo "<br>";


// The json_decode() function is used to decode a JSON object into a PHP object or an associative array.

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj));
echo "<br>";


var_dump(json_decode($jsonobj, true));
echo "<br>";

//  Accessing the Decoded Values

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
echo "<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);
echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];
echo "<br>";


$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);
foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}

?>