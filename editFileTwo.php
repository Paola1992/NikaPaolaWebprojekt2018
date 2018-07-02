<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 10.06.18
 * Time: 17:46
 */

?>
<?php

include "dbConnection.php";
include "session.php";
$username=$_SESSION["username"];

$oldFilename = $_POST["oldFilename"];
$newFilename = $_POST["newFilename"];

$URL = 'uploads/'.$oldFilename;
$pathinfo=pathinfo($URL);
$dateiendung=$pathinfo['extension'];
$filename = $newFilename.".".$dateiendung;

$dateiname = $newFilename.$username.date('Y-m-d').time().".".$dateiendung;
echo "Alter Dateiname: ".$oldFilename."<br>";
echo "Dateiname: ".$dateiname."<br>";
echo "filename: ".$filename."<br>";

$oldPath = "uploads/".$oldFilename; //bisheriger Dateipfad
$newPath = "uploads/".$dateiname; //Ziel-Dateipfad

if($newFilename == "")
{
    echo "Eingabefehler. Bitte Feld korrekt ausfüllen. <a href=\"editFileOne.php\">Zurück</a>";
    exit;
}
else
{

    if (file_exists($oldPath)) {
        $umbenennen= $dbConnect->exec("UPDATE upload SET filename='$filename' WHERE filename='$oldFilename'");
        $query= $dbConnect->query($umbenennen);
        #rename ($oldPath, $newPath);
        header('location: homeDashboard.php');
    }

    else {
        echo"Datei existiert nicht";
        exit;
    }
    echo"nichts eingegeben";
}
?>
