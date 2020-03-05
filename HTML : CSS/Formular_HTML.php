
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Formular</title>
  </head>
<body>
<div>
  <?php
    if($Teilnahme == true)
  ?>
</div>
<div class="container">
  <form action="kontakt.php" method="post">

    <label for="Vname">Vor-Name</label>
    <input type="text" id="fname" name="vorname1" placeholder="Dein Vorname">

    <label for="Nname">Nach-Name</label>
    <input type="text" id="lname" name="nachname1" placeholder="Dein Nachname">

    <label for="Land">Land</label>
Å    <input type="text" id="land" name="land1" placeholder="Von wo kommst du?html ">

    <label for="Stadt">Stadt</label>
    <input type="text" id="stadt" name="stadt1" placeholder="Your last name..">

    <label for="Nachricht">Nachricht</label>
    <textarea type ="text" id="nachricht" name="nachricht1" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
</body>
</html>