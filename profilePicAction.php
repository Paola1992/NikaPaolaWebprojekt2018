<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 10.06.18
 * Time: 20:09
 */
?>
<?php
### Profilpic hochladen und path in Datenbank eintragen

include "dbconnection.php";
include "session.php";

if (isset($_POST['upload'])) {
    $pictureFilename = $_FILES['pic']['name'];
    $pictmp = $_FILES['pic']['tmp_name'];
    $file_size = $_FILES['pic']['size'];

    $file_ext = explode(".", $pictureFilename);
    $file_ext = strtolower(end($file_ext));


    $allowed = array ("jpg", "png", "jpeg", "gif"); #festelgen der erlaubten Dateitypen

    if (in_array($file_ext, $allowed)) #Überprüfung des Dateityps
    {
        if($file_size <= 5000000) #Überprüfung der Filegröße
        {
            if ($pictureFilename!='' AND $pictmp!='') {
                $pictureFilename = $_SESSION["username"].".gif";
                $path = "profilpicture/".$pictureFilename;
                move_uploaded_file($pictmp, $path);


                $username=$_SESSION["username"];


                ### Dateipath des pices in Datenbank eintragen

                $eintrag = $dbConnect->exec("UPDATE login SET profilepicture='$path' WHERE username='$username'");
                $query = $dbConnect->query($eintrag);
                header("Refresh:0; url=profilePicSuccess.php");
            }
            else {header("Location:profileError.php");

            }
        }
        else {header("Location:profilePicSize.php");}
    }
    else {header("Location:profilePicType.php");}
}


?>

