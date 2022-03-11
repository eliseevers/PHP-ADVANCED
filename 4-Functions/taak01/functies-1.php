<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function schrijfKleur($kleur){
            echo "<p><font color='$kleur'>Deze tekst is in de kleur $kleur</font></p>";
        }
        schrijfKleur("red");
        echo "<br>";
        schrijfKleur("orange");
        echo "<br>";
        schrijfKleur("yellow");
        echo "<br>";
        schrijfKleur("black");
    ?>
</body>
</html>