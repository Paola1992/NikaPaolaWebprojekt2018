<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 19.05.18
 * Time: 20:18
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
    <title>Safe&ampSend</title>
</head>
<body>
<!-- NAVIGATION -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Titel und Schalter -->
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Navigation ein-/ausblenden</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">BlaBlaBox</a>

        </div>

        <!-- Navigation links -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="homeDashboard.php">Home</a>
                </li>
            </ul>

            <!-- Navigation rechts -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <?php
                    #include "session.php";
                    ### Profilbild-Anzeige
                    include "dbconnection.php";
                    $stmt = $dbConnection->query("SELECT pb FROM login WHERE username='".$_SESSION["username"]."'");
                    $row = $stmt->fetch();
                    $profilbild = "<img src='".$row['pb']."' width='18' height='18' ";


                    ### Benutzernamen anzeigen
                    $username=$_SESSION["username"];
                    echo '<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$profilbild.' class="profile-image img-circle">  Hallo '.$username.'<span class="caret"></span></a>';
                    # http://placehold.it/18x18
                    ?>

                    <ul class="dropdown-menu">

                        <li><a href="passwort_aendernh.php">Passwort ändern</a></li>
                        <li><a href="profilbild_aendern.php">Profilbild ändern</a></li>
                        <li><a href="account_loeschen_ausfuehren.php">Account löschen</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div> <!-- navbar-collapse -->
    </div> <!-- container-fluid -->
</nav>

<!-- Footer -->
<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <p class="navbar-text pull-left">© 2016 - Blablabox</p>
        <p class="navbar-text pull-right"><a class="impressum" href="impressum.php">Impressum</a></p>
    </div>
</div>

</body>
</html>
