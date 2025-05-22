<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .conteiner{
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-family:'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>
    <?php
        $nomeCliente = "Ian Kilwiny R. Barros";
    ?>

    <div class="conteiner">
        <h1>Olá! Seja bem vindo, <?php echo $nomeCliente?> </h1>
    </div>

    
</body>
</html>