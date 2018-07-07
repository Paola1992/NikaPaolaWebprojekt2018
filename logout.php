<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 16.05.18
 * Time: 19:47
 */

session_start();
session_destroy();
header("location:index.php");
?>

