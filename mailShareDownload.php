<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 03.07.18
 * Time: 15:50
 */

 include "dbConnection.php";

 $fileID = $_GET["fileID"];

 $stmt = $dbConnect->prepare("SELECT file, status FROM upload WHERE id=:fileID");
 $stmt->bindparam(':fileID', $fileID);
 $stmt->execute();

 $fileData = $stmt->fetch();

 if ($fileData['status'] == 1){
     $file = 'uploads/'.$fileData['file'];

     if (file_exists($file)) {
         header('Content-Description: File Transfer');
         header('Content-Type: application/octet-stream');
         header('Content-Disposition: attachment; filename="'.basename($file).'"');
         header('Expires: 0');
         header('Cache-Control: must-revalidate');
         header('Pragma: public');
         header('Content-Length: ' . filesize($file));
         readfile($file);
         header('location: homeDashboard.php');
     }
 } else {
     echo 'Keine Berechtigung zum Download.';
 }
?>
