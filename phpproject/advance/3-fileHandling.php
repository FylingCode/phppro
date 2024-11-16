<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>File Handling</h1>
    <?php
    // echo readfile("demo.text");

    // $myfile = fopen("demo.text", "r") or die("Unable to open file!");
    // echo fread($myfile, filesize("demo.text"));
    // fclose($myfile);

    // get only one line
    // $myfile = fopen("demo.text", "r") or die("Unable to open file!");
    // echo fgets($myfile);
    // fclose($myfile);

    //The feof() function checks if the "end-of-file" (EOF) has been reached.
    $myfile = fopen("demo.text", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);


    // The fgetc() function is used to read a single character from a file.

    $myfile = fopen("demo.text", "r") or die("Unable to open file!");
    // Output one character until end-of-file
    while (!feof($myfile)) {
        echo fgetc($myfile);
    }
    fclose($myfile);



    // create or write

    // w = write
    // $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    // $txt = "Mickey Mouse\n";
    // fwrite($myfile, $txt);
    // $txt = "Minnie Mouse\n";
    // fwrite($myfile, $txt);
    // fclose($myfile);

    // a = append
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $txt = "Donald Duck\n";
    fwrite($myfile, $txt);
    $txt = "Goofy Goof\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>
</body>

</html>