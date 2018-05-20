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
<?php
include "navegation.php";
?>
<form action="uploadfileAction.php" method="post"
      enctype="multipart/form-data">
</form>

<main>
    <div class="inner cover">
        <div class="container">
            <div class="col-lg-8 col-sm-8">
                <form enctype="multipart/form-data" class="form-signin" method="post" action="uploadfileAction.php">
                    <h2 class="form-signin-heading">Dateien uploaden</h2>
                    <div class="form-group">
                        <label for="exampleInputFile">Dateien hochladen</label>
                        <input type="file" id="file" name="file">
                    </div>
                    <button class="btn  btn-primary" type="submit">
                        <!--<span class="glyphicons glyphicons-cloud-upload"
                              aria-hidden="true"></span> (icon einfügen, ging aber nicht)--> Datei uploaden
                    </button>
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
</form> (Riemke Vorlesung)-->

</body>
</html>



