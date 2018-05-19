<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 23.04.18
 * Time: 12:55
 */

?>

<?php
echo "Dateiname: ".$_FILES["uploadfile"]["name"]."<br>"; if($_FILES["uploadfile"]["name"]=="")
{
    echo "Fehler Dateiname.";
    die(); }
$fileName=$_FILES["uploadfile"]["name"];
$fileType=substr($fileName,strlen($fileName)-3,strlen($fileName) ); $fileName=substr($fileName,0,strlen($fileName)-4 );
echo "FILENAME:".$fileName."FILETYPE:".$fileType."<br>";
if ($_FILES["uploadfile"]["size"] > 800000) {
    echo"Datei zu groß.";
    die();
}

