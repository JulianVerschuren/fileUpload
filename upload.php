<?php

#mysql db constants DB_HOST, DB_USER, DB_PASS, DB_NAME

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'thewall';



?>


<?php
require_once("fileUpload.php");

$mysqli = new mysqli (DB_HOST, DB_USER, DB_PASS, DB_NAME);
#check connection

if ($mysqli->connect_errno){

echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
exit();

}



?>

<?php


// stap1 maak db connection aan. (haal uit text bestand) -todo


//stap 2 gedaan is uplaod de file naar server
var_dump($_FILES);

$image_path = 'images/';

$filename = $image_path . basename($_FILES['fileToUpload']['name']);

$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);

echo $filename;


$tmp_filename = $_FILES['fileToUpload']['tmp_name'];



$destination = $image_path . $filename;



if (move_uploaded_file($tmp_filename, $destination))
  {
echo "file is uploaded";

  }

else
  {

    echo "failed";

  }
//stap 3 database theWall toevoegen 1 item aan tabel picture

//stap 3a maak een INSERT query aan
//stap 3b voer de query uit
$sql = "INSERT INTO pics (filename) VALUES ('$filename')";

if($mysqli->query($sql) === TRUE){

echo "werkt";

}


//stap4 : lees de gegevens uit de DB uit
//stap 4a: maak een SELECT query


 ?>
