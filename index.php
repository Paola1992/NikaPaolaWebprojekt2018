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
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <title>Save&ampSend</title>
</head>

<body>
<?php
include "indexNav.php";
?>
<div class="cover-container">
    <div class="logo">
        <img src="https://mars.iuk.hdm-stuttgart.de/~pp020/pictures/logo/LogoSaveAndSendGrau.svg" width="300"
             height="300"
             class="d-inline-block align-top" alt="">
        <p class="lead">Wir machen sicheres Sharing Service für jedermann verfügbar. Melde dich bei Save&Send an
        </p>
        <p class="lead">
            <a href="login.php" class="btn btn-lg btn-default">Einloggen</a>
        </p>
        <br>Noch kein Mitglied? <a href="registration.php" style="color:grey"> Jetzt Registrieren </a>
    </div>
</div>

<footer>
    <div class="navbar navbar-fixed-bottom">
        <div class="container">
            <p> © copyright 2018 by Grünen, Patiño. <a href="impressum.php">Impressum</a></p>
        </div>
    </div>
</footer>

</body>



</html>
