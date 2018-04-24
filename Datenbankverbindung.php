<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 23.04.18
 * Time: 12:58
 */


# Datenbankverbindung zu mars aufbauen

$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname='u-pp020', 'pp020', 'iaQuee2ooG', array('charset'=>'utf8'));


    
#Datenbankabfrage mit Prepared Statements und Anzeige
    
$statement=$pdo->prepare("SELECT * FROM users WHERE vorname=:vorname AND nachname = :nachname");
$statement->execute(array(':vorname'=>'Betty', ':nachname'=>'Beispiel'));
while($row=$statement->fetch()) {
echo $row['vorname']." ".$row['nachname']; echo "Kundennummer: ".$row['knr'];
}

    
#Fehler abfangen und anzeigen

$statement = $pdo->prepare("SELECT * FROM users"); if($statement->execute()) {
while($row=$statement->fetch()) {
echo $row[\'vorname\']." ".$row[\'nachname\'];
}
} else {
    echo "Datenbank-Fehler:";
    echo $statement->errorInfo()[2];
    echo $statement->queryString;
die(); }

  
#Datensatz einfügen

$statement = $pdo->prepare("INSERT INTO users (vorname, nachname, passwort) VALUES (?, ?, ?)");
$statement->execute(array(\'Betty\', \'Beispiel\', \'123456\' )); echo "id in der Datenbank: ".$id=$pdo->lastInsertId();

    
?>
