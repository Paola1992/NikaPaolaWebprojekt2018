<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 10.06.18
 * Time: 17:46
 */


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


$oldPath = "uploads/".$oldFilename; //bisheriger Dateipfad
$newPath = "uploads/".$dateiname; //Ziel-Dateipfad

$query= $dbConnect->exec("UPDATE upload SET filename='$filename' WHERE Filename='$oldFilename'");

if ($query > 0){
    header('location: homeDashboard.php');
} else {
    header( "Refresh:5; url=homeDashboard.php", true, 303);
    echo 'Fehler bei der Freigabe! Automatische weiterleitung in 5 Sek.';
}

?>
