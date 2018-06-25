<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 12.06.18
 * Time: 18:48
 */
include "session.php";
include "dbConnection.php";

$fileName = $_GET["varname"];
    //Datenbank-Eintrag der Datei mit zugehörigem Benutzer
    $username = $_SESSION["username"];
    $insertShare = "INSERT INTO share (username, filename) VALUES ('$username','$fileName')";
    $sql = $dbConnect->prepare($insertShare);
    $sql = $dbConnect->query($insertShare);

header("Location:share.php");

?>



