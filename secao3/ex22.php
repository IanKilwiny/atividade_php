<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se é par</title>
</head>
<body>
    <?php
        for($i = 1; $i <=20; $i++){
            $valorPar = $i % 2 == 0;
            if($valorPar){
                echo "<p>".$i."</p>";
            }
        }
    ?>
</body>
</html>