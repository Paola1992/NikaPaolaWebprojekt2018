<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 11.05.18
 * Time: 18:20
 */

session_start();

if(!isset($_SESSION["username"]))
{
    header("Location:homeDashboard.php");
    exit;
}
?>
