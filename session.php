<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 01.05.18
 * Time: 18:20
 */

session_start();
?>

<?php
if(!isset($_SESSION["Benutzername"]))
{
    header("Location:index.html");
    exit;
}
?>
