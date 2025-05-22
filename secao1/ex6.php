<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6 - Cálculo de orçamento</title>
</head>
<body>
    <?php
        $custoMaterial = 175.20;
        $custoMaoDeObra = 450;
        $custoTotal = $custoMaoDeObra + $custoMaterial
    ?>

    <div class="conteiner">
        <h1>Cálculo</h1>
        <?php
            echo "<h1>".$custoMaterial." + ".$custoMaoDeObra. " = ".$custoTotal."</h1>";
        ?>
    </div>
</body>
</html>