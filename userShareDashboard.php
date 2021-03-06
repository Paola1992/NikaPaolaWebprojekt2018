<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 24.06.18
 * Time: 12:24
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

    <title>Save&ampSend</title>

</head>
<body>
<?php
include "dbConnection.php";
include "session.php";
include "dashboardNav.php";

$stmt = $dbConnect->query("SELECT id, filename, shareduser FROM share WHERE username='" . $_SESSION["username"] . "'");

echo '<div class="table-responsive">';
echo '<table class="table table-striped table-hover">';

while ($row = $stmt->fetch()) {
    $fileID = $row['id'];
    $fileName = $row['filename'];
    $sharedUser = $row['shareduser'];

    echo "<tr>";
    echo '<td>'.$fileName.'</td>';
    echo '<td>'.$sharedUser.'</td>';
    echo '<td><a href="userShareRemove.php?fileID=' . $fileID . '" target="_self">Freigabe deaktivieren</a> </td>';

    echo "</tr>";
}
echo "</table>";
echo "</div>";

?>

</body>
</html>
