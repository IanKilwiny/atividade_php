<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5 - Preço e data</title>
</head>
<body>
    <?php
        $preco_unitario = 250.25;
    ?>
    <div class="conteiner">
        <h1>Preco: <?php echo $preco_unitario?></h1>
        <p><strong>var_dump: </strong> <?php var_dump(($preco_unitario))?></p>
        <p><strong>gettype: </strong> <?php echo gettype($preco_unitario)?></p>
    </div>
</body>
</html>