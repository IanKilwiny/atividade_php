<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alerta climático</title>
</head>
<body>
    <?php
        $temperatura = 22;

        if($temperatura < 0){
            echo "<h1>Alerta de Gelo</h1>";
        }elseif($temperatura >= 0 && $temperatura <= 15){
            echo "<h1>Clima Ameno</h1>";
        }elseif($temperatura >= 15 && $temperatura <= 25){
            echo "<h1>Clima Agradável</h1>";
        }else{
            echo "<h1>Atenção: Calor Extremo ♨️</h1>";
        }
    ?>
    
</body>
</html>