<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 12.06.18
 * Time: 20:41
 */
include "session.php";
include "dbConnection.php";

$sharedName = $_POST["username"];

//Datenbank-Eintrag der Datei mit zugehörigem Benutzer
$username = $_SESSION["username"];
$insertShare = "INSERT INTO share (shareduser) VALUES ('$sharedName') WHERE ";
$sql = $dbConnect->prepare($insertShare);
$sql = $dbConnect->query($insertShare);

if ($sharedName == "0")
{
    header("Location:share.php");
}

echo $fileName . $sharedUser;
?>