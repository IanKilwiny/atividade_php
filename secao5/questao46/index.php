<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando require e include</title>
</head>
<body>
    <h1>Exemplo de <strong>include()</strong></h1>
    <?php
        include("arquivo_inexistente.php");
        echo "<p style='color:red;'>Continua executando mesmo assim:</p>";
    ?>

    <h1>Exemplo de <strong>require()</strong></h1>
    <?php
        require("arquivo_inexistente.php");
        echo "<p style='color:red;'>Continua executando mesmo assim?</p>";
    ?>

    <h1></h1>
</body>
</html>
