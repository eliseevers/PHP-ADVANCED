<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>advanced 2</title>
    <style> 
    table, td, tr, th{
        border: <?php echo $_POST["tabelrand"]?>px solid black;
        border-collapse: collapse;
        padding: <?php echo $_POST["celpadding"]?>px;
        background-color: <?php echo $_POST["achtergrondkleur"]?>;
        color:  <?php echo $_POST["tekstkleur"]?>;
    }
    </style>
</head>

<table >
<tr>
    <th>Key</th>
    <th>Value</th>
</tr>

<?php 
    $student["voornaam"]="Elise";
    $student["achternaam"]="Evers";
    $student["leeftijd"]=16;
    $student["muzieksmaak"]="Indie/rock";
    $student["woonplaats"]="Amstelveen";
    $student["sport"]="Volleybal";
 

    function maakTabel($sleutel, $waarde){ 
        echo "<tr>";
        echo "<td>$sleutel</td>";
        echo "<td>$waarde</td>";
        echo "</tr>";
     } 

 foreach($student as $key => $value){
     maakTabel($key, $value);
}
?>