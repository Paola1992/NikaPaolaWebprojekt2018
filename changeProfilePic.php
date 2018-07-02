<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 10.06.18
 * Time: 19:00
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
            <p>Dein aktuelles Profilbild</p>
            <?php
            $stmt = $dbConnect->query("SELECT profilepicture FROM login WHERE username='".$_SESSION["username"]."'");
            $row = $stmt->fetch();

            ### Profilbild-Anzeige

            $profilepicture = '<img src="'.$row['pb'].'" width="80" height="80" class="profile-image img-circle">';
            echo $profilepicture;
            ?>
            <br></br>

            <!-- Profilbild-Upload -->
            <p>Lade jetzt ein neues Profilbild hoch</p>
            <div id="profil">
                <form action="profilePicAction.php" method="post" enctype="multipart/form-data"> <!-- Dateityp der auszuwählen ist, wird festgelegt-->

                    <input type="file" name="pic">
                    <br>
                    <input type="submit" class="btn btn-primary" name="upload" value="Upload">
                </form>
            </div>

        </div>
    </div>
</div>
<br></br>
</body>



</html>

