<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 09.06.18
 * Time: 19:16
 */


// Verbindung zur Datenbank wird hergestellt

include "dbConnection.php";
$fileID = $_GET["fileID"];
$file = $_GET["file"];
$file2 = 'uploads/'.$file;

    unlink($file2);

// Löschen von eigenen Dateien in der Upload Tabelle
    $stmt = $dbConnect->prepare("DELETE FROM upload WHERE id = :fileID");
    $stmt->bindparam(':fileID', $fileID);
    $stmt->execute();

// Löschen von gesharedten Dateien in der Share Tabelle
    $stmt2 = $dbConnect->prepare("DELETE FROM share WHERE originalid = :fileID");
    $stmt2->bindparam(':fileID', $fileID);
    $stmt2->execute();

    header("location:homeDashboard.php");

?>