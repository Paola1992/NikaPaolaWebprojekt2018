<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 03.07.18
 * Time: 15:50
 */

include "dbConnection.php";

$fileID = $_GET["fileID"];

$stmt = $dbConnect->prepare("DELETE FROM share WHERE id=:fileID");
$stmt->bindparam(':fileID', $fileID);
$stmt->execute();

header('location: userShareDashboard.php');

?>
