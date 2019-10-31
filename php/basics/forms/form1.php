<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Listing 1 - PHP</title>
  </head>
  <body>
    <p>Bitte tragen Sie Ihre Daten ein.<br/></p>
    <form action="form1.php" method="post">
      <p><input name ="vorname" value="Florin" /> Vorname <br /></p>
      <p></p><input name ="nachname" value="Hamann" /> Nachname<br /></p>
      <p></p><input name ="email" /> Email<br /></p>
      <p>
      <input type="submit"/>
      <input type="reset"/>
      </p>
    </form>
    <?php
    echo "Hier beginnt PHP </p>";
    echo "Es folgen die Daten </p>";
    echo $_POST["vorname"] . " " . $_POST["nachname"];
    ?>
  </body>
</html>
