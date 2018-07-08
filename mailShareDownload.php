<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 03.07.18
 * Time: 15:50
 */

 include "dbConnection.php";

 $fileID = $_GET["fileID"];

 $stmt = $dbConnect->prepare("SELECT file, filename, status FROM upload WHERE id=:fileID");
 $stmt->bindparam(':fileID', $fileID);
 $stmt->execute();

 $fileData = $stmt->fetch();

 if ($fileData['status'] == 1){
     $file = 'uploads/'.$fileData['file'];
     $filename = $fileData['filename'];

     if (file_exists($file)) {
         header('Content-Type: octet/stream');
         header('Content-Disposition: attachment; filename="'.$filename.'"');
         readfile($file);
         header('location: homeDashboard.php');
     }
 } else {
     echo 'Keine Berechtigung zum Download.';
 }
?>
