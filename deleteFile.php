<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 21.05.18
 * Time: 19:16
 */

include "dbConnection.php";
$file = $_GET["varname"];
$file2 = 'uploads/'.$file;

if (file_exists($file2)) {
    unlink($file2);
    $delete = $dbConnect->exec("DELETE FROM upload WHERE filename = '$file'");
    $query = $dbConnect->query($delete);
    header("location:homeDashboard.php");
}
?>