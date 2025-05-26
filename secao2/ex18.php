<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 18 - Escolha de cores</title>
</head>
<body>
    <?php
        $cor = "Rosa";

        switch($cor){
            case "Azul":
                echo "<h1>A cor ".$cor." está disponível!</h1>";
                break;
            case "Vermelho":
                echo "<h1>A cor ".$cor." está disponível!</h1>";
                break;
            case "Verde":
                echo "<h1>A cor ".$cor." está disponível!</h1>";
                break;
            default:
                echo "<h1>A cor ".$cor. " não está disponível!</br> Cor padrão adicionado: Branco! </h1>";
                break;
        }
    ?>
    
</body>
</html>