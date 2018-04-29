<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 29.04.18
 * Time: 14:21
 */

/*define("Systemfehler", E_ERROR);
define("Systemwarnung", E_WARNING);
define("Erfolgreich", 0);
define("Fehlgeschlagen", 300);

$Rückmeldung = array('Benutzer wurde erstellt' => Erfolgreich, 'errors' => array());

function error($msg,$code){
    global $Rückmeldung;
    $Rückmeldung['errors'][] = array('error_msg' => $msg,'error_code' => $code);
} // error()

error('meine Fehlermeldung','#fehlercode');

$debug = false;

function stop($code){
    global $Rückmeldung, $debug;
    $Rückmeldung['state_code'] = $code;
    if(isset($debug) && !$debug) {
        unset($Rückmeldung['errors']);
    }
    echo json_encode($Rückmeldung);
    exit($code);
}// stop()

*/

//Verbindungsaufbau DB
$dsn    = "mysql:dbhost=localhost;dbname=u-pp020";
$dbuser = "pp020";
$dbpass = "iaQuee2ooG";
$option = array (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

//Prüft Verbindung, ansonsten Verbindung abbrechen und Systemfehler ausgeben
try
{
    $db     = new PDO($dsn,$dbuser,$dbpass,$option);

}
catch (PDOException $e)
{
    error("PDO Fehler - ".$e->getMessage(),$e->getCode());
    stop(Systemfehler);
    die();
    echo "fehlgeschlagen";
}


?>

