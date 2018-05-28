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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">


    <title>Safe&Send</title>

</head>
<body>
<?php

include "navigation.php";

include "file.php";

?>
<div class="container">
    <form action="uploadfileAction.php" method="post"
          enctype="multipart/form-data">
    </form>
    <main>
        <div class="inner cover">
            <div class="container">
                <div class="col-lg-8 col-sm-8">
                    <form enctype="multipart/form-data" class="form-signin" method="post" action="uploadfileAction.php">
                        <h2 class="form-signin-heading">Dateien hochladen</h2>
                        <div class="form-group">
                            <label for="exampleInputFile">Dateien hochladen</label>
                            <input type="file" id="file" name="file">
                        </div>
                        <button class="btn  btn-primary" type="submit">Datei uploaden
                        </button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>

