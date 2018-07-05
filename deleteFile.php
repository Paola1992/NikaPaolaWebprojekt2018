<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 21.05.18
 * Time: 19:16
 */

include "dbConnection.php";
$fileID = $_GET["fileID"];
$file = $_GET["file"];
$file2 = 'uploads/'.$file;

    unlink($file2);

    $stmt = $dbConnect->prepare("DELETE FROM upload WHERE id = :fileID");
    $stmt->bindparam(':fileID', $fileID);
    $stmt->execute();

    $stmt2 = $dbConnect->prepare("DELETE FROM share WHERE originalid = :fileID");
    $stmt2->bindparam(':fileID', $fileID);
    $stmt2->execute();

    header("location:homeDashboard.php");

?>