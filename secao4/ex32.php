<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo</title>
</head>
<body>
    <?php
        function soma(int $valor1, int $valor2):int{
            return $valor1 + $valor2;
        }


        echo "<h1>".soma(10, 20)."</h1>";
    ?>
</body>
</html>