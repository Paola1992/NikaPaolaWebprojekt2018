<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 10.06.18
 * Time: 19:04
 */
?>
<?php

include "dbConnection.php";

$target_dir = "uploads/"; //wo wird das File gespeichert
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //Datei-Pfad
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Überprüfung, ob das Bild ein Fake ist
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Datei ist ein Bild - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Datei ist kein Bild.";
        $uploadOk = 0;
    }
}

// Falls Datei bereits vorhanden ist
if (file_exists($target_file)) {
    echo "Sorry, diese Datei exisitiert bereits.";
    $uploadOk = 0;
}

// Überprüfung der Dateigröße
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, deine Datei ist zu groß. Sie darf maximal 50MB betragen.";
    $uploadOk = 0;
}

// Festlegung des Bildformats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, nur JPG, JPEG, PNG & GIF Dateien sind erlaubt.";
    $uploadOk = 0;
}
?>


