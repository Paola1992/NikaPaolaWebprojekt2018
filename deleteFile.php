<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 21.05.18
 * Time: 19:16
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include "dbConnection.php";
$file = $_GET["varname"];
$file2 = 'uploads/'.$file;

if (file_exists($file2)) {
    unlink($file2);
    $delete = "DELETE FROM upload WHERE filename = '$file'";

    $sql = $dbConnect->prepare($delete);
    $sql = $dbConnect->query($delete);

    header("location:homeDashboard.php?msg=4");
}
?>