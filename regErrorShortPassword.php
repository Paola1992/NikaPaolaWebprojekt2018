<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 03.05.18
 * Time: 18:25
 */
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <title>Registrierung</title>
</head>
<body>
<?php
include "indexNav.php";
?>

<h1 class="margin-base-vertical">Jetzt registrieren</h1>

<!--Warnung Passwort zu kurz-->
<div class="alert alert-danger" role="alert">Das Passwort ist zu kurz! Bitte versuche es erneut</div>

<div class="col-sm-6">
    <form enctype="multipart/form-data" action="regAction.php" method="post">
        <div class="form-group">
            <label for="username">Benutzername</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label for="email">E-Mail Adresse</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="passwordOne">Passwort</label>
            <input type="password" class="form-control" name="passwordOne">
        </div>
        <div class="form-group">
            <label for="passwordTwo">Passwort wiederholen</label>
            <input type="password" class="form-control" name="passwordTwo">
        </div>
        <button type="submit" class="btn btn-primary">Senden</button>
    </form>
</div>
</body>
</html>
