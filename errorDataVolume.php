<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 19.05.18
 * Time: 15:08
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

<!-- Registrieungsformular -->
    <div class="cover-container">
        <div class="masthead clearfix">
            <div class="inner">
                <h3 class="masthead-brand">Safe & Send</h3>
                <nav>
                    <ul class="nav masthead-nav">
                        <li class="active"><a href="navigationIndex.php">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="registration.php">Registrieren</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <h1 class="margin-base-vertical">Jetzt Datei Hochladen</h1>

<!--Warnung wegen Daten Volumen-->
    <div class="alert alert-danger" role="alert">Daten Volumen zu hoch</div>

    <div class="col-sm-6">
        <form class="form-signin" method="post" action="uploadfileAction.php">
            <h2 class="form-signin-heading">Dateien uploaden</h2>
            <div class="form-group">
                <label for="exampleInputFile">Dateien hochladen</label>
                <input type="file" id="uploadFile" name="file">
            </div>
            <button class="btn  btn-primary" type="submit">
                <!--<span class="glyphicons glyphicons-cloud-upload"
                      aria-hidden="true"></span> (icon einfügen, ging aber nicht)--> Datei uploaden
            </button>
        </form>
    </div>
</body>
</html>