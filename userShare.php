<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 16.06.18
 * Time: 12:24
 */

$fileID = $_GET["fileID"];
$fileRealName = $_GET["fileRealName"];
$fileName = $_GET["fileName"];
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

    <title>Safe&Send</title>
</head>
<body>

<?php
include "dashboardNav.php";
?>
<div>
    <form action="userShareAction.php" method="post">Mit wem möchtest du die Datei teilen?<br>
        <input type="text" name="username" style="color:black"/>

        <?php echo '<input type="hidden" name="fileID" value="' . $fileID . '"/>'; ?>
        <?php echo '<input type="hidden" name="fileName" value="' . $fileName . '"/>'; ?>
        <?php echo '<input type="hidden" name="fileRealName" value="' . $fileRealName . '"/>'; ?>

        <input class="btn btn-primary btn-lg" href="userShareAction.php" role="button" type="submit" value="Jetzt teilen"/>
    </form>

</div>

</body>
</html>
