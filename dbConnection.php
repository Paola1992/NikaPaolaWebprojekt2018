<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 29.04.18
 * Time: 17:46
 */

$dbServername = "localhost";
$dbName = "u-pp020";
$dbUsername = "pp020";
$dbPassword = "iaQuee2ooG";


try {
    $dbConnect = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);
    // set the PDO error mode to exception
    $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Datenbankverbindung erfolgreich";
}
catch(PDOException $e)
{
    echo "Datenbankverbindung fehlgeschlagen: " . $e->getMessage();
}
?>
