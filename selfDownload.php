<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 16.05.18
 * Time: 15:50
 */

// Verbindung zur Datenbank wird hergestellt
include "dbConnection.php";

$fileID = $_GET["fileID"];

//Auswahl der in der Upload Tabelle hochgeladenen Dateien
$stmt = $dbConnect->prepare("SELECT file, filename FROM upload WHERE id=:fileID");
$stmt->bindparam(':fileID', $fileID);
$stmt->execute();

$allFiles = $stmt->rowCount();

$fileData = $stmt->fetch();


if ($allFiles == 1){
    $file = 'uploads/'.$fileData['file'];
    $filename = $fileData['filename'];

    //Eigentlicher Download der Datei
    if (file_exists($file)) {
        header('Content-Type: octet/stream');
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        readfile($file);
    }
} else {

    // Wenn Download nicht funktioniert
    echo 'Fehler';
}
?>
