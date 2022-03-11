<!DOCTYPE html>
<html>
<body>

<?php
$leeftijd=0;

while($leeftijd<18){
    echo "<li>" . "ik ben $leeftijd dus ik mag nog niet stemmen" . "</li>";
    $leeftijd++;
}

echo "<ul>" . "<li>" . "ik ben 18 dus ik mag stemmen" . "</li>" . "</ul>";

?>
</body>
</html> 