<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 19.05.18
 * Time: 15:57
 */
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <title>Upload</title>
</head>
<body>

<?php
include "dashboardNav.php";
header("Refresh:5; url=homeDashboard.php", true, 303);
?>
<!--Fehler beim Hochladen der Datei-->
<div class="alert alert-danger" role="alert">Fehler beim Hochladen der Datei . Automatische weiterleitung in 5 Sek</div>
</body>
</body>
</html>