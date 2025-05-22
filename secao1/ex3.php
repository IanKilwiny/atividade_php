<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3 - Medição de terreno</title>
</head>
<body>
    <?php
        $base = 50;
        $altura = 100;

        $area = $base * $altura;
    ?>

</body>

    <div class="conteiner">
        <h1>Área de um terreno!</h1>
        <p>Base: <?php echo $base ?>m<sup>2</sup></p>
        <p>Altura: <?php echo $altura?>m<sup>2</sup></p>
        <p>Área total: <?php echo $area?>m<sup>2</sup></p>
    </div>
</html>