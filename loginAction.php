<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 13.05.18
 * Time: 13:28
 */

session_start();
include "dbConnection.php";

$username = $_POST["username"];
$password = $_POST["password"];

//Verschlüsselung des Passworts
function hashPassword($password, $username)
{
    return hash('sha256', $password . $username);
}
$hashedPassword =hashPassword($password, $username);


//Suchen des Passworts des Benutzers in der Tabelle User
$stmt = $dbConnect->query("SELECT password FROM user WHERE username= '$username'");
$row = $stmt->fetch();


//Abgleichen des Datenbankpassworts
if ($hashedPassword === $row['password'])
{
    $_SESSION["username"] = $username;
    header("Location: homeDashboard.php");
    echo 'Login erfolgreich. <br> <a href="homeDashboard.php">Geschützer Bereich</a>';
}
else
{
    header("Location:loginError.php");
echo 'Login fehlgeschlagen';
}
?>