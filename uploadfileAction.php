<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 29.04.18
 * Time: 14:02
 */
?>

<?php
include "dbConnection.php";
include "session.php";

$username = $_SESSION["username"];
//$username = $dbConnect->query("SELECT id FROM user WHERE username= '$username'");
// Prüfung ob Datenvolumen von 500 MB erreicht
$stmtFilesize = $dbConnect->query("SELECT fileSize FROM upload WHERE user= '$username'");
$rowFilesize = $stmtFilesize->fetchAll(PDO::FETCH_COLUMN, 0);
$totalFilesize = array_sum($rowFilesize);
$dataVolume = 500 - (array_sum($rowFilesize) / 1000000);

if ($dataVolume > 0) {
    //Prüfung ob die Datei bereits vorhanden
    if (file_exists(str_replace(' ', '-', $_FILES['file']['tmp_name']))) {

        //Erstellen eines neuen benutzer- und datumsbezogenem Dateinamen
        date_default_timezone_set('Europe/Berlin');

        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileExtension = explode('.', $fileName);
        $fileExtension = strtolower(end($fileExtension));
        $username = $_SESSION["username"];
        $fileName = $fileName . $username . date('Y-m-d') . time() . "." . $fileExtension;
        $displayName = $_FILES['file']['name'];
        $fileName = str_replace(' ', '-', $fileName);
        $fileTmp = $_FILES['file']['tmp_name']; #fileTMP entspricht der eigentlichen Datei
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];


        // Definition der erlaubten Dateiendungen
        $allowedExtensions = array('jpg', 'png', 'jpeg', 'pdf', 'mp3', 'ppt', 'pptx', 'doc', 'docx', 'xls', 'xlsx', 'mov', 'mpeg', 'mp4', 'wma');


        //Überprüfung des Dateityps
        if (in_array($fileExtension, $allowedExtensions))
        {
            if ($fileError === 0) {
                //Überprüfung ob Datei größer 5 MB
                if ($fileSize <= 50000000)
                {
                    $fileNameNew = basename($fileName);
                    $fileDestination = "uploads/".$fileNameNew;

                    echo $fileDestination;
                    //Upload der Datei und prüfen auf Fehler
                    if (move_uploaded_file($fileTmp, $fileDestination)) {

                        //Datenbank-Eintrag der Datei mit zugehörigem Benutzer

                        $username = $_SESSION["username"];
                        $insertFile = "INSERT INTO upload (file, user, fileSize, filename) VALUES ('$fileNameNew', '$username','$fileSize','$fileName')";
                        $sql = $dbConnect->prepare($insertFile);
                        $sql = $dbConnect->query($insertFile);

                        //Weiterleitung zur Home-Seite
                        header("Location:index.php");
                    } else {
                        header("Location:errorUpload.php");
                        echo $fileDestination;
                    }


                } else {
                    header("Location:errorFilesize.php");
                }
            } else echo "Es ist ein Fehler aufgetreten";

        } else {
            header("Location:errorFileExtension.php");
        }

    } else {

        header("Location:errorSameFile.php");
    }
} else header("Location:errorDataVolume.php");
?>
<!-- if ($fileType == "jpg" OR $fileType=="png" OR $fileType== "jpeg" OR $fileType == "gif" OR $fileType=="pdf" OR $fileType== "gif")
{
echo "Dateiart ok<br>";
} else {
echo"Dateiart nicht zugelassen.";
die();
}
if (!move_uploaded_file($_FILES["uploadfile"]["tmp_name"], "/home/gurzki/public_html/upload/files/".$_FILES["uploadfile"]["name"])) { echo "Datei nicht hochgeladen";
die();
}


?> (Upload verarbeiten II)

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
}  (Upload verarbeiten I) -->



