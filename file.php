<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 21.05.18
 * Time: 17:47
 */

#Datenvolumen Ausgabe
include "dbConnection.php";
include "session.php";

$username = $_SESSION["username"];

$stmtFileSize = $dbConnect->query("SELECT fileSize FROM upload WHERE user= '$username'");
$rowFileSize = $stmtFileSize->fetchAll(PDO::FETCH_COLUMN, 0);
$totalSize = array_sum($rowFileSize);
$dataVolume = 500 - ($totalSize / 1000000);
$percent = ($totalSize / 5000000);
$percent = round($percent, 0, PHP_ROUND_HALF_DOWN);

echo "Ihr Datenvolumen beträgt noch:&nbsp" . round($dataVolume, 2) . "MB";

echo '<div class="progress">';
echo '<div class="progress-bar" role="progressbar" aria-valuenow="' . $percent . '%" aria-valuemin="0" aria-valuemax="100" style="width:' . $percent . '%;">' . $percent . '%</div></div>';


###Inhalt der Datenbank + Download-Funktion + Editier-Funktion + Lösch-Funktion###
$stmt2 = $dbConnect->query("SELECT id, file, filename, fileSize, status FROM upload WHERE user='" . $_SESSION["username"] . "'");

echo '<div class="table-responsive">';
echo '<table class="table table-striped table-hover">';

while ($row = $stmt2->fetch()) {
    $fileID = $row['id'];
    $fileName = $row['filename'];
    $fileSize = $row['fileSize'];
    $fileSize = $fileSize/1000000;
    $fileSize = round($fileSize, 2);
    $fileStatus = $row['status'];
    echo "<tr>";
    echo '<td><a href="uploads/' . $fileName . '">' . $fileName . '</td>';
    $URL = 'https://mars.iuk.hdm-stuttgart.de/~ng046/publicDownload.php?fileID=' . $fileID;
    echo '<td>'.$fileSize.' MB</td>';
    echo '<td><a href="download.php?varname=' . $fileName . '" target="_self">herunterladen</a> </td>';

    echo '<td><a href="editFileOne.php?varname=' . $fileName . '" target="_self">umbenennen</a></td>';

    echo '<td><a href="deleteFile.php?varname=' . $fileName . '" target="_self">löschen</a></td>';

    $username = $_SESSION["username"];

    if ($fileStatus == 1){
        echo '<td><a href="mailto:?subject=' . $username . ' möchte einen Link mit dir teilen&body=Klicke auf folgenden Link, um die Datei anzusehen: ' . $URL . '" target="_self">teilen</a></td>';
        echo '<td><a href="removePublic.php?varid=' . $fileID . '" target="_self">Freigabe aufheben</a></td>';
    } else {
        echo '<td><a href="setPublic.php?varid=' . $fileID . '" target="_self">Teilen aktivieren</a></td>';
    }

    echo "</tr>";
}
echo "</table>";
echo "</div>";

?>
