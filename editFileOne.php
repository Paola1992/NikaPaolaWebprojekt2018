<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 10.06.18
 * Time: 17:45
 */
?>
<?php
include "session.php";
$file = $_GET["varname"];
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
    <div class="jumbotron">
        <div class="container">
            <p>Datei umbenennen:</p>
            <?php
            echo '<form action="editFileTwo.php" method="post">';
            echo '<input type="text" name="newfile" maxlength="50"></input><br>';
            echo '<input type="hidden" name="oldfile" value="' . $file . '"/><br>';
            echo '<input class="btn btn-primary btn-lg" href="editFileTwo.php" role="button" type="submit" target="self" value="Änderungen übernehmen"/></form>';
            echo "</div>";
            echo "</div>";


            #Datenvolumen Ausgabe
            include "dbConnection.php";

            $username = $_SESSION["username"];

            $stmt_dateigroesse = $dbConnect->query("SELECT FileSize FROM upload WHERE user= '$username'");
            $row_dateigroesse = $stmt_dateigroesse->fetchAll(PDO::FETCH_COLUMN, 0);
            $gesamtgroesse = array_sum($row_dateigroesse);
            $datenvolumen = 500 - (array_sum($row_dateigroesse) / 1000000);
            $prozent = 0 - ($datenvolumen - 500);
            $prozent = round($prozent, 0, PHP_ROUND_HALF_DOWN);

            echo "Ihr Datenvolumen beträgt noch:&nbsp" . round($datenvolumen, 2) . "MB";

            echo '<div class="progress">';
            echo '<div class="progress-bar" role="progressbar" aria-valuenow="' . $prozent . '%" aria-valuemin="0" aria-valuemax="100" style="width:' . $prozent . '%;">' . $prozent . '%</div></div>';


            ###Inhalt der Datenbank + Download-Funktion + Editier-Funktion + Lösch-Funktion###


            $stmt2 = $dbConnect->query("SELECT filename, file FROM upload WHERE user='" . $_SESSION["username"] . "'");

            echo '<div class="table-responsive">';
            echo '<table class="table table-striped table-hover">';

            while ($row = $stmt2->fetch()) {
                $file = $row['filename'];
                $file = $row['file'];
                echo "<tr>";
                echo '<td><a href="uploads/' . $file . '">' . $file . '</td>';
                $URL = 'https://mars.iuk.hdm-stuttgart.de/~pp020/uploads/' . $file;
                $pathinfo = pathinfo($URL);
                $dateiendung = $pathinfo['extension'];
                echo '<td>' . $dateiendung . '</td>';
                echo '<td><a href="download.php?varname=' . $file . '" target="_self">herunterladen</a></td>';

                echo '<td><a href="editFileOne.php?varname=' . $file . '" target="_self">umbenennen</a></td>';

                echo '<td><a href="deleteFile.php?varname=' . $file . '" target="_self">löschen</a></td>';

                $username = $_SESSION["username"];
                echo '<td><a href="mailto:?subject=' . $username . ' möchte einen Link mit dir teilen&body=' . $URL . '</a>" target="_self">teilen</a></td>';
                #readfile($URL.$file)

                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";

            ?>
            <br></br><br></br><br></br>
        </div>
</body>
</html>
