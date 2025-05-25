<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 12 - Classificação de temperatura</title>
</head>
<body>
    <?php
        $temperatura = -10;

        $classificacao = null;

        if($temperatura > 0){
            $classificacao = "😎 Positiva";
        }elseif($temperatura == 0){
            $classificacao = "❄️ Zero";
        }else{
            $classificacao = "🥶 Negativa";
        }
    ?>
    <div>
        <h1>🌡️ Classificação de temperatura</h1>
        <p>Temperatura: <?php echo $temperatura?></p>
        <p>Classificação: <?php echo $classificacao?></p>
    </div>
    
</body>
</html>