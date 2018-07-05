<?php
/**
 * Created by PhpStorm.
 * User: nikagruenen
 * Date: 29.04.18
 * Time: 17:37
 */


//Importieren der DB Verbindungsdatei
include("dbConnection.php");

//Definieren der Variablen der übergebenen Inhalte aus dem Registrieungsfeld
$username = $_POST["username"];
$email = $_POST["email"];
$passwordOne = $_POST["passwordOne"];
$passwordTwo = $_POST["passwordTwo"];


//Prüfung ob Passwörter identisch oder leer oder Benutzername leer.
  if ($passwordOne != $passwordTwo OR $username == "" OR $passwordOne == "") {
     header("Location:regError.php");
      exit;
  }

  else {

      if (strlen($passwordOne) <= 5) {
          header("Location:regErrorShortPassword.php");
      } else {
//Funktion für das Verschlüsseln des eingegebenen Passworts
          function hashPassword($passwordOne, $username)
          {
              return hash('sha256', $passwordOne . $username);
          }

//Verschlüsseln des Passworts
          $hashedPassword = hashPassword($passwordOne, $username);


//Prüfung ob Benutzer bereits in der Datanbank existiert
          $counter = 0;
          $sql = $dbConnect->prepare("SELECT username FROM user WHERE username = :username");
          $sql->execute(array(':username' => $username));
          while ($rows = $sql->fetchAll(PDO::FETCH_ASSOC)) {
              $counter++;
          }

//Wenn Benutzer nicht vorhanden, dann wird dieser eingetragen
          if ($counter == 0) {
              $insertUser = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
              $sql = $dbConnect->prepare($insertUser);
              $sql = $dbConnect->query($insertUser);
          } else {
              header("Location:regError.php");
          }



          //Wenn erfolgreich wird der Benutzer eingeloggt
                  if ($insertUser == true)
                  {
                      header('Location:index.php');
                      exit;
                  } else {
                      echo "Fehler beim Speichern des Benutzernames. <a href=\"registration.php\">Zurück</a>";
                  }








  }

  }
  ?>