<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
  body {
    background-color: <?= $_POST["kleuren"] ?>;
  }
</style>
</head>
<body>
<?php
  echo "voornaam:". $_POST["voornaam"];
  echo "<br>";
  echo "achternaam:". $_POST["achternaam"];
  echo "<br>";
  echo "klas:". $_POST["klas"];
  echo "<br>";
  echo "leeftijd:". $_POST["leeftijd"];
  echo "<br>";
  echo "adres:". $_POST["adres"];
  echo "<br>";
  echo "plaatsnaam:". $_POST["plaatsnaam"];
  echo "<br>";
  echo "favorietemuziekband:". $_POST["favorietemuziekband"];
  echo "<br>";
  echo "geslacht:" . $_POST["geslacht"];
  echo "<br/>";
  echo "kleuren:". $_POST["kleuren"];
?>
</body>
</html> 