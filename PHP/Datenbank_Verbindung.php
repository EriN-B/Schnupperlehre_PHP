<?php

//Mit der Datenbank Verbindung aufnehmen
$DB_HOST = "localhost";
$DB_NAME = "kontakt"; //Datenbankname
$DB_BENUTZER = "root"; //Datenbankbenutzer (Standartmässig "root")
$DB_PASSWPRT = " "; //Datenbank Passwort (Standartmässig nichts)

$OPTION = [
  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4",
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
 ];

 try {
  $db = new PDO("mysql:host=" . $DB_HOST . ";dbname=" . $DB_NAME,
   $DB_BENUTZER, $DB_PASSWORT, $OPTION);
 }
 catch (PDOException $e) {
  exit("Verbindung fehlgeschlagen! " . $e->getMessage());
 }
?>