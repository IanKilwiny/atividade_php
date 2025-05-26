<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado Civil</title>
</head>
<body>
    <?php
        $estadoCivil= 'S';

        switch ($estadoCivil) {
            case 'C':
                echo "<h1>Casado</h1>";
                break;
            case 'S':
                echo "<h1>Solteiro</h1>";
                break;
            case 'D':
                echo "<h1>Divorciado</h1>";
                break;
            case 'O':
                echo "<h1>Outro</h1>";
                break;
        }
    ?>
</body>
</html>