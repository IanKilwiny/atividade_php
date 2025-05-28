<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem Personalizada</title>
</head>
<body>
    
    <?php
        $nome = "Master Chief";

        function mensagemPersonalizada($nome){
            return "Olá, ".$nome."! Seja Bem Vindo ao PHP! 🐘";
        }

        echo mensagemPersonalizada($nome);
    ?>
</body>
</html>