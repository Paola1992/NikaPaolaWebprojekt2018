<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 04.05.18
 * Time: 12:30
 */

$file = $_GET["varname"];
$file = 'uploads/'.$file;

        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            header('location: index.php');
        }
?>

<!--
//https://mars.iuk.hdm-stuttgart.de/~gurzki/dl/download2.php?filename=bild.jpg
$directory = "/home/gurzki/public_html/upload/files";
$mimetype = "image/jpeg";
if(empty($_GET["filename"]))
{
    echo " keine Datei angegeben";
    die();
}
else
{
    $filename=$_GET["filename"];
}
$filepath=$directory.$filename; header("Content-Type:".$mimetype);
header('Content-Disposition: attachment;filename="'.$filename.'"'); header("Content-Transfer-Encoding: binary "); header("Content-Length: ".filesize($filepath)); readfile($filepath);
 ( Download aus anderem Verzeichnis) -->

