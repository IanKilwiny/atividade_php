<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatar Preço</title>
</head>
<body>
    <?php
        function formatarPreco($valor) {
            return 'R$ ' . number_format($valor, 2, ',', '.');
    }

    $preco = 1234.56;
    echo formatarPreco($preco);
    ?>

</body>
</html>