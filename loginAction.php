<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 19.05.18
 * Time: 13:28
 */

session_start();
include "dbConnection.php";

$username = $_POST["username"];
$password = $_POST["password"];

function hashPassword($password, $username)
{
    return hash('sha256', $password . $username);
}


$hashedPassword =hashPassword($password, $username);

$stmt = $dbConnect->query("SELECT password FROM user WHERE username= '$username'");
$row = $stmt->fetch();


if ($hashedPassword === $row['password'])
{
    $_SESSION["username"] = $username;
   // header("Location: home.php");
    echo 'Login erfolgreich. <br> <a href="home.html">Geschützer Bereich</a>';

}
else
{
   // header("Location:welcome_fehler.html");
echo 'Login fehlgeschlagen';
}
?>