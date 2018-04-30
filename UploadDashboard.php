<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 23.04.18
 * Time: 12:46
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

    <title>Dateien uploaden | Safe&Send</title>
</head>

<body>
<main>
    <div class="inner cover">
        <div class="container">

            <!--<div class="col-lg-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dateien uploaden</li>
                </ol>
                (Hier ist das Nav Feld)
            </div>-->
            <div class="col-lg-8 col-sm-8">
                <form class="form-signin" method="post" action="">
                    <h2 class="form-signin-heading">Dateien uploaden</h2>
                    <div class="form-group">
                        <label for="exampleInputFile">Dateien hochladen</label>
                        <input type="file" id="exampleInputFile" name="datei">
                    </div>
                    <button class="btn  btn-primary" type="submit">Datei uploaden</button>
                </form>
            </div>
        </div>
    </div>


</main>
<!--<form action="upload.php" method="post"
      enctype="multipart/form-data">
    Datei auswählen:
    <input type="file" name="uploadfile"
           id="uploadfile"><br>
    <input type="submit" value="Datei
   hochladen" name="submit">
</form>-->

</body>
</html>



