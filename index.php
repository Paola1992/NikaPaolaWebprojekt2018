<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 20.04.18
 * Time: 19:32
 */
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8"
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">


    <title>Safe&Send</title>

</head>
<body>
<?php
include "navegationIndex.php";
?>
<div class="cover-container">
    <div class="inner-cover">
        <img src="https://mars.iuk.hdm-stuttgart.de/~pp020/pictures/logo/LogoRosa.svg" width="1000" height="1000"
             class="d-inline-block align-top" alt="">
        <p class="lead">Wir machen sichere Cloud Storage für jedermann verfügbar. Melde dich bei Safe&Send an</p>
        <p class="lead">
            <a href="login.php" class="btn btn-lg btn-default">Einloggen</a>
        </p>
        <br>Noch kein Mitglied? <a href="registration.php" style="color:grey"> Jetzt Registrieren </a>
    </div>
</div>

</body>
</html>
