<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 10.06.18
 * Time: 17:45
 */

include "session.php";
$fileID = $_GET["fileID"];
$oldFilename = $_GET["oldFilename"];
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

    <title>Save&ampSend</title>

</head>
<body>

<?php
include "dashboardNav.php";
?>

<!-- Umbenennungsformular wird erstellt und leitet weiter auf editFilenameAction.php -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="margin-base-vertical">Wie möchtest du die Datei umbenennen?</h1>
            <?php
            echo '<form action="editFilenameAction.php" method="post">';
            echo '<input type="text" name="newFilename" maxlength="50"/><br>';
            echo '<input type="hidden" name="fileID" value="' . $fileID . '"/><br>';
            echo '<input type="hidden" name="oldFilename" value="' . $oldFilename . '"/><br>';
            echo '<input class="btn btn-primary btn-lg" href="editFilenameAction.php" role="button" type="submit" target="self" value="Jetzt umbenennen"/></form>';
            echo "</div>";
            ?>

        </div>
</body>
</html>
