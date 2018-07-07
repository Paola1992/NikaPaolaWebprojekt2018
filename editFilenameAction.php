<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 10.06.18
 * Time: 18:15
 */

include "dbConnection.php";
include "session.php";
$username = $_SESSION["username"];

$fileID = $_POST["fileID"];
$newFilename = $_POST["newFilename"];
$oldFilename = $_POST["oldFilename"];

echo $oldFilename;

$pathinfo=pathinfo($oldFilename);
$fileExtension=$pathinfo['extension'];
echo $fileExtension;
$newFilename = $newFilename.".".$fileExtension;

// Name der Datei wird in beiden Tabellen geändert
$query1= $dbConnect->exec("UPDATE upload SET filename='$newFilename' WHERE id='$fileID'");
$query2= $dbConnect->exec("UPDATE share SET filename='$newFilename' WHERE originalid='$fileID'");

    header('location: homeDashboard.php');

?>
