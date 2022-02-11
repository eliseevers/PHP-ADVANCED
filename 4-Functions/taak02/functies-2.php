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
    function rekenUit($getal1 , $getal2 , $getal3){
        $som = $getal1+$getal2+$getal3;
        return $som;
    }
    $antwoord=rekenUit(1 , 2 , 3);
    echo "<li>" ."de uitkomst van deze som is $antwoord". "</li>";

    $antwoord=rekenUit(7, 8 , 9);
    echo "<li>" ."de uitkomst van deze som is $antwoord". "</li>";

    $antwoord=rekenUit(10,10,10);
    echo "<li>" ."de uitkomst van deze som is $antwoord". "</li>";
    ?>
</body>
</html>