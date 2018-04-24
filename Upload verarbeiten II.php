<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 23.04.18
 * Time: 12:55
 */

?>

if ($fileType == "jpg" OR $fileType=="png" OR $fileType== "jpeg" OR $fileType == "gif" OR $fileType=="pdf" OR $fileType== "gif")
{
echo "Dateiart ok<br>";
} else {
echo"Dateiart nicht zugelassen.";
die();
}
if (!move_uploaded_file($_FILES["uploadfile"]["tmp_name"], "/home/gurzki/public_html/upload/files/".$_FILES["uploadfile"]["name"])) { echo "Datei nicht hochgeladen";
die();
}


