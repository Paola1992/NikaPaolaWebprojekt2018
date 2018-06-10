<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 29.04.18
 * Time: 17:46
 */

//Verbindung DB
$dbServername = "localhost";
$dbName = "u-pp020";
$dbUsername = "pp020";
$dbPassword = "iaQuee2ooG";

//Verbindung wird geprüft, wenn Fehlgeschlagen dann Fehlerausgeben
try {
    $dbConnect = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);
    $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Datenbankverbindung fehlgeschlagen: " . $e->getMessage();
}
?>
