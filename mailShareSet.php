<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 03.07.18
 * Time: 15:49
 */

 include "dbConnection.php";
 include "session.php";

$fileID = $_GET["varid"];

$query= $dbConnect->exec("UPDATE upload SET status='1' WHERE id='$fileID'");

if ($query > 0){
    header('location: homeDashboard.php');
} else {
    header( "Refresh:5; url=homeDashboard.php", true, 303);
    echo 'Fehler bei der Freigabe! Automatische weiterleitung in 5 Sekunden.';
}

?>
