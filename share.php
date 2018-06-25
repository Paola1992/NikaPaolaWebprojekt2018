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
?>
<div>
    <form action="shareAction.php" method="post">Mit wem möchtest du die Datei teilen?<br>
        <input type="text" name="username" style="color:black"/>
        <input class="btn btn-primary btn-lg" href="shareAction.php" role="button" type="submit" value="Jetzt teilen"/>
    </form>
    <?php
    include "shareFile.php";
    ?>
</div>

</body>
</html>

