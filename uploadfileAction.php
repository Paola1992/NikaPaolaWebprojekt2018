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

$currentUsername = $_SESSION["Benutzername"];

$stmt_dateigroesse = $dbConnect->query("SELECT fileSize FROM upload WHERE userid= '$currentUsername'");
$row_dateigroesse = $stmt_dateigroesse->fetchAll(PDO::FETCH_COLUMN, 0);
$gesamtgroesse = array_sum($row_dateigroesse);
$datenvolumen = 500 - (array_sum($row_dateigroesse) / 1000000);

if ($datenvolumen > 0) {

    if (file_exists(str_replace(' ', '-', $_FILES['file']['tmp_name']))) {
        date_default_timezone_set('Europe/Berlin');

        $file = $_FILES['file'];
        $file_name = $_FILES['file']['name'];
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        $currentUsername = $_SESSION["Benutzername"];
        $file_name = $file_name . $currentUsername . date('Y-m-d') . time() . "." . $file_ext;
        $anzeigename = $_FILES['file']['name'];
        $file_name = str_replace(' ', '-', $file_name);
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_error = $_FILES['file']['error'];


        $allowed = array('txt', 'jpg', 'png', 'jpeg', 'pdf', 'mp3', 'ppt', 'pptx', 'doc', 'docx', 'xls', 'xlsx', 'pages', 'numbers', 'keynote', 'mov', 'mpeg', 'mp4', 'wma'); #festelgen der erlaubten Dateitypen

        if (in_array($file_ext, $allowed)) #Überprüfung des Dateityps
        {
            if ($file_error === 0) {
                if ($file_size <= 50000000) #Überprüfung der Filegröße
                {
                    $file_name_new = basename($file_name);
                    $file_destination = "uploads/" . $file_name_new;

                    if (move_uploaded_file($file_tmp, $file_destination)) {

                        #Datenbank-Eintrag des Files mit zugehörigem Benutzer

                        $currentUsername = $_SESSION["Benutzername"];

                        $eintrag = $dbConnect->exec("INSERT INTO upload (file, userid, fileSize, filename) VALUES ('$file_name_new', '$currentUsername','$file_size','$file_name')");
                        $query = $dbConnect->query($eintrag);

                        #Weiterleitung zur Home-Seite
                        header("Location: index.php");
                    } else {
                        header("Location:error401.php");
                    }


                } else {
                    header("Location:error_dateigroesse.php");
                }
            } else echo "fehler aufgetreten";

        } else {
            header("Location:error_dateityp.php");
        }

    } else {
        header("Location:error_gleichedatei.php");
    }
} else header("Location:error_datenvolumen.php");
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



