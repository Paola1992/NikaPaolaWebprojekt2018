<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 10.06.18
 * Time: 17:46
 */

include "dbConnection.php";
include "session.php";
$username = $_SESSION["username"];

$fileID = $_POST["fileID"];
$newFilename = $_POST["newFilename"];
$oldFilename = $_POST["oldFilename"];

echo $oldFilename;

$pathinfo=pathinfo($oldFilename);
$dateiendung=$pathinfo['extension'];
echo $dateiendung;
$newFilename = $newFilename.".".$dateiendung;

$query1= $dbConnect->exec("UPDATE upload SET filename='$newFilename' WHERE id='$fileID'");

$query2= $dbConnect->exec("UPDATE share SET filename='$newFilename' WHERE originalid='$fileID'");


    header('location: homeDashboard.php');

?>
