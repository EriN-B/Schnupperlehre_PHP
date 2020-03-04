<?php
 //In Formular eingetragene Informationen in einer Variabel speichern
if($_SERVER['REQUEST_METHOD'] === 'POST') {
$vorname =  htmlentities($_POST["vorname1"] ?? ' ');
$nachname = htmlentities($_POST["nachname1"] ?? ' ');
$land = htmlentities($_POST["land1"] ?? ' ');
$stadt = htmlentities($_POST["stadt1"] ?? ' ');
$nachricht =htmlentities($_POST["nachricht1"] ?? ' ');

//Daten in die Datenbank Tabelle einfügen
if ($db->exec("INSERT INTO `kontaktdaten`
              (`vorname`, `nachname`, `land`, `stadt`,`nachricht`)
       VALUES ('$vorname', '$nachname', '$land', '$stadt', '$nachricht')")) {
         ?> <H1> Die Nachricht wurde eingefügt <h1> <?php
}
}
?>