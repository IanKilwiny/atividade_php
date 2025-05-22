<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2 - Controle de Estoque</title>
</head>
<body>
    <?php
        $qtdEstoque = 100;
        $nomeItem = "Playstation 5"
    ?>

    <div class="conteiner">
        <h1>Itens em estoque</h1>

        <div class="conteiner-estoque">
            <h2><?php echo $nomeItem?></h2>
            <div>Quantidade em estoque: <?php echo $qtdEstoque?></div>
        </div>
    </div>
    
</body>
</html>