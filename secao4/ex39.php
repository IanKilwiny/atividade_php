<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Terreno</title>
</head>
<body>
    <?php
        function calcularAreaTerreno($largura, $comprimento) {
            return $largura * $comprimento;
        }


        $largura = 10;
        $comprimento = 25;
        $area = calcularAreaTerreno($largura, $comprimento);

       
        echo "<h1>Área do terreno: " . $area . " m²</h1>";
       
    ?>

</body>
</html>