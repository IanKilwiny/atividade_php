<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem regressiva</title>
</head>
<body>
    <?php
        $i = 5;
        while($i > 0){
            echo "<p>".$i."</p>";

            $i-= 1;
        }
    ?>
</body>
</html>