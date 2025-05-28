<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Custo Total</title>
</head>
<body>
    <?php
        $itens = [
            1 => [
                "nome" => "Calculadora",
                "preco" => 19.90,
                "quantidade" => 5
            ],

            2 => [
                "nome" => "Play5",
                "preco" => 4500,
                "quantidade" => 2
            ],

            3 => [
                "nome" => "Monitor LG 42 polegadas",
                "preco" => 2500,
                "quantidade" => 5
            ]


        ] ;


        print_r($itens);


        function calculoItens($preco, $quantidade){

            return $preco * $quantidade;
        }

    ?>

    <?php
        foreach($itens as $key => $valor){
            echo "<h1>".$key." - ".$valor["nome"]."</h1>";
            echo "<p>Preço unitário: ".$valor["preco"]."</p>";
            echo "<p>Total: ".calculoItens($valor["preco"], $valor["quantidade"])."</p>";
        }
    ?>
    
</body>
</html>