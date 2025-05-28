<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nums = [1,2,3,4,5,6,7,8,9,10];
        $aleatorio = rand(1, 10);
        $valorEscolhido = 0;
        $i = 0;

        do{
            echo "<p> Valor errado. Tente novamente</p>";
            $valorEscolhido = $nums[$i];
            $i++;
        }while($valorEscolhido != $aleatorio);

        echo "<p>Você acertou!</p>";
        echo "<p>Aleatório: ".$aleatorio."</p>";
        echo "<p>Valor Escolhido: ".$valorEscolhido."</p>";
    ?>
</body>
</html>