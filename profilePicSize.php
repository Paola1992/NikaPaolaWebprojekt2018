<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 10.06.18
 * Time: 19:01
 */
?>
<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">


    <title>Safe&Send</title>

</head>
<body>

<?php
include "navigation.php";
?>

<div class="container">
    <div class="page-header">
        <h1>Einstellungen <small>Profilbild</small></h1>
    </div>
    <div class="jumbotron">
        <div class="container">
            <div class="alert alert-danger" role="alert">Die Datei ist zu groß! Sie darf 5MB nicht überschreiten.</div>
            <p>Dein aktuelles Profilbild</p>
            <?php
            ### Profilbild-Anzeige
            #include "connection.php";
            $stmt = $dbConnect->query("SELECT profilpicture FROM login WHERE username='".$_SESSION["username"]."'");
            $row = $stmt->fetch();
            $profilbild = '<img src="'.$row['pb'].'" width="80" height="80" class="profile-image img-circle">';
            echo $profilbild;
            ?>


            <br></br>
            <!-- Profilbild-Upload -->
            <p>Lade jetzt ein neues Profilbild hoch</p>
            <div id="profil">
                <form action="profilePicAction.php" method="post" enctype="multipart/form-data"> <!-- Dateityp der auszuwählen ist, wird festgelegt-->

                    <input type="file" name="bild">
                    <br>
                    <input type="submit" class="btn btn-primary" name="upload" value="Upload">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>


