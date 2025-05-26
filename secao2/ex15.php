<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 15 - Bebidas</title>
</head>
<body>
    <?php
        $bebida = "chá";


        switch ($bebida) {
            case 'café':
                echo "Você escolheu: ".$bebida;
                break;
            case 'chá':
                echo "Você escolheu: ".$bebida;
                break;
            case 'suco':
                echo "Você escolheu: ".$bebida;
                break;
            default:
                echo "Bebida não disponível!";
                break;
        }
    ?>
</body>
</html>