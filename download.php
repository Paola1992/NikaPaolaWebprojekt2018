<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 03.07.18
 * Time: 15:50
 */

include "dbConnection.php";

$fileID = $_GET["fileID"];

$stmt = $dbConnect->prepare("SELECT file, filename FROM upload WHERE id=:fileID");
$stmt->bindparam(':fileID', $fileID);
$stmt->execute();

$anzahlDateien = $stmt->rowCount();

$fileData = $stmt->fetch();

if ($anzahlDateien == 1){
    $file = 'uploads/'.$fileData['file'];
    $filename = $fileData['filename'];

    if (file_exists($file)) {
        header('Content-Type: octet/stream');
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        readfile($file);
    }

} else {
    echo 'Fehler';
}
?>
