<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 23.05.18
 * Time: 19:42
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <title>Einloggen</title>
</head>
<body>
<?php
include "indexNav.php";
?>

<!--Warnung wegen Fehler bei Benutzername/Passwort-->
<div class="alert alert-danger" role="alert">Ungültiger Benutzername und/oder Passwort! Bitte versuche es erneut.</div>

<!--Einloggen Formular-->
<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">
            <div class="inner cover">
                <h1 class="cover-heading">Einloggen</h1>
                <p>Logge dich jetzt mit deinen Benutzerdaten ein.</p>
                <br>
                <form action="loginAction.php" method="post">Benutzername<br>
                    <input type="text" name="username" maxlength="20" style="color:black"/> <br>
                    Passwort<br>
                    <input type="password" name="password" maxlength="20" style="color:black"/><br>
                    <br>
                    <input class="btn btn-primary btn-lg" href="homeDashboard.php" role="button" type="submit"
                           value="Einloggen"/>
                </form>
                <br>Noch kein Mitglied? <a href="registration.php" style="color:grey"> Jetzt Registrieren </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>