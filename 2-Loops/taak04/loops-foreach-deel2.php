
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Foreach</title>
</head>
<body>
    <div class="container">
        <div>
            ik zit in klas
        </div>
        <div> 
            <?php
            $selected = "8A";
            $klassen = array('8A', '8B', '8C', '8D', '8E', '9A', '9B', '9C', '9D', '9E');

            echo "<select>";
            foreach($klassen as $klas){
                if($selected == $klas){
                    echo "<option selected= 'selected' value='$klas'>$klas</option>";

                }
                else{
                    echo "<option value='$klas'> $klas</option>";
                }
            }
            echo"</select>";
            ?>
        </div>

    </div>
    <input type="submit">
</body>
</html>