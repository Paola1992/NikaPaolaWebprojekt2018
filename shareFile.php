<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 12.06.18
 * Time: 21:13
 */

include "session.php";
include "dbConnection.php";

###Inhalt der Datenbank + Download-Funktion + Editier-Funktion + Lösch-Funktion###
$stmt = $dbConnect->query("SELECT file, filename, fileSize FROM upload WHERE user='" . $_SESSION["username"] . "'");

echo '<div class="table-responsive">';
echo '<table class="table table-striped table-hover">';

while ($row = $stmt->fetch()) {
    $displayName = $row['file'];
    $fileName = $row['filename'];
    echo "<tr>";
    echo '<td><a href="uploads/' . $fileName . '">' . $displayName . '</td>';
    $URL = 'https://mars.iuk.hdm-stuttgart.de/~pp020/uploads/' . $fileName;
    $pathInfo = pathinfo($URL);
    $fileExtension = $pathInfo['extension'];
    echo '<td>' . $fileExtension . '</td>';
    echo '<td><input type="checkbox" name="sharedFile"></td>';


    echo "</tr>";
}
echo "</table>";
echo "</div>";

?>
