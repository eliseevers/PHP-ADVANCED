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
    function schrijfKleur($colorstyle){
        echo "<ul>" . "<li>" . "<font color = $colorstyle>" . "deze tekst is  $colorstyle" . "</li>" . "<ul>";
    }
    schrijfKleur('red');
    schrijfKleur('black'); 
    schrijfKleur('yellow');
    schrijfKleur('pink');
    ?>
</body>
</html>