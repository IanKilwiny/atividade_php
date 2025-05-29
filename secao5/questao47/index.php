<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carregar usuário</title>
</head>
<body>
    <h1>Utilizando o <strong>include()</strong></h1>
    <?php
        include(__DIR__."\config.php");
        include(__DIR__."\config.php");
        include(__DIR__."\config.php");
        include(__DIR__."\config.php");
        include(__DIR__."\config.php");
    ?>

    <h1>Utilizando o <strong>include_once()</strong></h1>

    <?php
        
        include_once(__DIR__."\config.php");
        include_once(__DIR__."\config.php");
        include_once(__DIR__."\config.php");
        include_once(__DIR__."\config.php");
        include_once(__DIR__."\config.php");

        echo "<p>Ignora e não executa nada, pois já foi executado antes com include</p>";
    ?>
</body>
</html>