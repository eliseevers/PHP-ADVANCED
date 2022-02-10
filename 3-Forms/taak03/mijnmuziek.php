<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn muziek GET</title>
</head>
<body>
    <form name="getinvoerformulier" action="mijnmuziek.php" method="get">
        <input type="text" name="artiest" placeholder="Artiest"><br/>
        <input type="text" name="titel" placeholder="Titel"><br/>
        <input type="text" name="jaar_van_uitkomst" placeholder="Jaar van uitkomst"><br/>
        <input type="text" name="muziek_soort" placeholder="Muziek soort"><br/>
        <input type="submit" name="submit" value="verstuur"><br/> 
    </from> 
    <?php
    echo "Mijn favoriete Artiest is " . $_GET["artiest"] . ". de Titel van mijn favorite nummer is " . $_GET["titel"] . ". het jaar van uitkomst is " . $_GET["jaar_van_uitkomst"] . ". De muziek soort is " . $_GET["muziek_soort"];
    ?>   

</body>
</html>
http://localhost/roc/modules/PHP-ADVANCED/3-Forms/taak03/mijnmuziek.php?artiest=Lana+del+Rey&titel=Video+games&jaar_van_uitkomst=2012&muziek_soort=Indie+Rock&submit=verstuur