<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 01.05.18
 * Time: 18:20
 */

session_start();

if(!isset($_SESSION["username"]))
{
    header("Location:homeDashboard.php");
    exit;
}
?>
