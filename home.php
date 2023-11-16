<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$fileNames = ["File1.txt", "File2.txt", "File3.txt", "File4.txt", "File5.txt", "File6.txt", "File7.txt", "File8.txt", "File9.txt", "File10.txt", "File11.txt", "File12.txt", "File13.txt", "File14.txt"];

foreach ($fileNames as $fileName) {
    $fileopen = fopen($fileName, "r");

    if (!$fileopen) {
        die("Failed to open the file: $fileName");
    }

    echo "<b>CONTENTS<b> <b>$fileName</b>:<br><br>";



    echo "<br><br><br>";
    while (!feof($fileopen)) {
        echo fgets($fileopen);
    }

    echo "<br><br><br>";

    echo " <hr><hr>";

    fclose($fileopen);

    echo "<br><br><br>";
}

?>