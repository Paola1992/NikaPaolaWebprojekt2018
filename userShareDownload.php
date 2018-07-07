<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 30.06.18
 * Time: 15:50
 */

include "dbConnection.php";

$fileID = $_GET["fileID"];
$sharedUser = $_GET["sharedUser"];

$stmt = $dbConnect->prepare("SELECT file, filename FROM share WHERE id=:fileID AND shareduser=:sharedUser");
$stmt->bindparam(':fileID', $fileID);
$stmt->bindparam(':sharedUser', $sharedUser);
$stmt->execute();

$allFiles = $stmt->rowCount();

$fileData = $stmt->fetch();

if ($allFiles > 0){
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
