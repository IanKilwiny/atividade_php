<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem Regressiva</title>
</head>
<body>
    <?php
        echo "<h1> Contagem Regressiva </h1>";

        for($i = 1; $i <= 10; $i++){
            
            if ($i <= 3){
                echo "<p style = 'color: red;'>".$i."</p>";
            }elseif($i > 3 && $i <= 7){
                echo "<p style = 'color: blue;'>".$i."</p>";
            }else{
                echo "<p style = 'color: green;'>".$i."</p>";
            }
        }
    ?>
</body>
</html>