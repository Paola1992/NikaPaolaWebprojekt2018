<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 21.05.18
 * Time: 17:47
 */

// Verbindung zu Datenbank und Session
include "dbConnection.php";
include "session.php";

$username = $_SESSION["username"];

echo '<h1>Eigene Dateien</h1>';

// Alle Dateien die der User selbst hochgeladen hat, werden angezeigt
$stmt2 = $dbConnect->query("SELECT id, file, filename, fileSize, status FROM upload WHERE user='" . $_SESSION["username"] . "'");

echo '<div class="table-responsive">';
echo '<table class="table table-striped table-hover">';


while ($row = $stmt2->fetch()) {
    $fileID = $row['id'];
    $fileRealName = $row['file'];
    $fileName = $row['filename'];
    $fileSize = $row['fileSize'];
    $fileSize = $fileSize/1000000;
    $fileSize = round($fileSize, 2);
    $fileStatus = $row['status'];
    echo "<tr>";
    echo '<td><a href="uploads/' . $fileName . '">' . $fileName . '</td>';
    $URL = 'https://mars.iuk.hdm-stuttgart.de/~ng046/mailShareDownload.php?fileID=' . $fileID;
    echo '<td>'.$fileSize.' MB</td>';

    //Buttons für die Weiterleitung der Datei zu Download, Umbennen und Löschen
    echo '<td><a href="selfDownload.php?fileID=' . $fileID . '" target="_self">herunterladen</a> </td>';

    echo '<td><a href="editFilename.php?fileID=' . $fileID . '&&oldFilename=' . $fileName . '" target="_self">umbenennen</a></td>';

    echo '<td><a href="deleteFile.php?fileID=' . $fileID . '&&file=' . $fileRealName . '" target="_self">löschen</a></td>';

    $username = $_SESSION["username"];

    //Teilen der Datei via Email - Wenn Teilen aktiviert ist (Status 1) wird "Teilen deaktiviert" (removePublic.php) angezeigt, wenn nicht dann kann man das Teilen aktivieren durch setPublic.php (Status 0)
    if ($fileStatus == 1){
        echo '<td><a href="mailto:?subject=' . $username . ' möchte einen Link mit dir teilen&body=Klicke auf folgenden Link, um die Datei anzusehen: ' . $URL . '" target="_self">teilen</a></td>';
        echo '<td><a href="mailShareRemove.php?varid=' . $fileID . '" target="_self">E-Mail Teilen deaktivieren</a></td>';
    } else {
        echo '<td><a href="mailShareSet.php?varid=' . $fileID . '" target="_self">E-Mail Teilen aktivieren</a></td>';
    }

    //Teilen mit anderen Nutzern von Safe & Send
    echo '<td><a href="userShare.php?fileID=' . $fileID  . '&&fileName=' . $fileName . '&&fileRealName=' . $fileRealName . '" target="_self">Für Safe&Send-Nutzer freigeben</a></td>';

    echo "</tr>";
}
echo "</table>";
echo "</div>";

echo '<h1>Für mich freigegebene Dateien</h1>';

###Inhalt der Datenbank + Download-Funktion + Editier-Funktion + Lösch-Funktion###
$stmt3 = $dbConnect->query("SELECT id, username, filename FROM share WHERE shareduser='" . $_SESSION["username"] . "'");

echo '<div class="table-responsive">';
echo '<table class="table table-striped table-hover">';

while ($row2 = $stmt3->fetch()) {

    $shareFileId = $row2['id'];
    $shareFileName = $row2['filename'];

    echo "<tr>";
    echo '<td><a href="uploads/' . $shareFileName . '">' . $shareFileName . '</td>';
    echo '<td><a href="userShareDownload.php?fileID=' . $shareFileId . '&&sharedUser=' . $_SESSION["username"] . '" target="_self">herunterladen</a> </td>';

    echo "</tr>";
}
echo "</table>";
echo "</div>";

?>
