<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functies-2.php</title>
</head>
<body>
    <?php
        function rekenuit ($argument1, $argument2, $argument3){
            $allesbijelkaar = $argument1 + $argument2 + $argument3;

            return $allesbijelkaar;
        }
        
        $som1 = rekenuit(2, 8, 9);
        $som2 = rekenuit(9, 1, 20);
        $som3 = rekenuit (10, 30, 5);
        echo "2 + 8 + 9 = $som1<br>";
        echo "9 + 1 + 20 = $som2<br>";
        echo "10 + 30 + 5 = $som3<br>";
    ?>
</body>
</html>