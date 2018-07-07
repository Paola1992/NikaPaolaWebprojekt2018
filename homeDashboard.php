<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 04.05.18
 * Time: 12:24
 */
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <title>Save&ampSend</title>

</head>
<body>
<?php
include "dashboardNav.php";
include "dashboardFiles.php";
?>
<div class="container">
    <form action="uploadAction.php" method="post"
          enctype="multipart/form-data">
    </form>
    <main>

        <!--Datei Upload - Formular (eigentlicher Vorgang in uploadAction.php)-->

        <div class="inner cover">
            <div class="container">
                <div class="col-lg-8 col-sm-8">
                    <form enctype="multipart/form-data" class="form-signin" method="post" action="uploadAction.php">
                        <h2 class="form-signin-heading">Dateien hochladen</h2>
                        <div class="form-group">
                            <label for="exampleInputFile">Dateien hochladen</label>
                            <input type="file" id="file" name="file">
                        </div>
                        <button class="btn  btn-primary" type="submit">Jetzt hochladen
                        </button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
