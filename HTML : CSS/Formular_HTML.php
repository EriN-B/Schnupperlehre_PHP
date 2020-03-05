<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Titel</title>
  </head>
<body>
<div>
  <?php
    if($Teilnahme == true){
      ?><script> window.alert("Vielen Dank für deine Anmeldung, du nimmst nun am Gewinnspiel teil.\n\n Viel Glück!!!") </script><?php
    }
  ?>
</div>
<div class="container">
  <form action="kontakt.php" method="post">

    <label for="Vname">Dein Vorname</label>
    <input type="text" id="fname" name="vorname1" placeholder="Dein Vorname">

    <label for="Nname">Dein Nachname</label>
    <input type="text" id="lname" name="nachname1" placeholder="Dein Nachname">

    <label for="Land">Von wo kommst du?</label>
    <select name="land1">
      <option>Schweiz </option>
      <option>Deutschland </option>
      <option>Österreich </option> 
    </select>

    <label for="Stadt">Stadt</label>
    <input type="text" id="stadt" name="stadt1" placeholder="Wo wohnst du?">

    <label for="Nachricht">Nachricht</label>
    <textarea type ="text" id="subject" name="nachricht1" placeholder="Hasst du eine Miteilung? " style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
</body>