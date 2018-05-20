<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 19.05.18
 * Time: 19:47
 */
?>
<?php
session_start();
session_destroy();

header("location:index.php");
?>

