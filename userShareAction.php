<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 17.06.18
 * Time: 18:48
 */
include "session.php";
include "dbConnection.php";

$sharedUSer = $_POST["username"];
$fileID = $_POST["fileID"];
$fileName = $_POST["fileName"];
$fileRealName = $_POST["fileRealName"];

$username = $_SESSION["username"];

$stmt = $dbConnect->prepare("INSERT INTO share (originalid, username, file, filename, shareduser) VALUES (:originalid, :username, :file, :filename, :shareduser)");
$stmt->bindparam(':originalid', $fileID);
$stmt->bindparam(':username', $username);
$stmt->bindparam(':filename', $fileName);
$stmt->bindparam(':file', $fileRealName);
$stmt->bindparam(':shareduser', $sharedUSer);
$stmt->execute();

header("Location:homeDashboard.php");

?>
