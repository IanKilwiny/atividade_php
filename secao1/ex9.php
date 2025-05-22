<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 9 - Exibir PI</title>
</head>
<body>
    <?php
        $pi = pi();
    ?>
    <div class="conteiner">
        <h1>Valor de PI: <?php echo number_format($pi, 2)?></h1>
    </div>
</body>
</html>