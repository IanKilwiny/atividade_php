<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de Notas</title>
</head>
<body>
    <?php

        function mediaTotal($notas){
            $total = array_sum($notas) / count($notas);

            return $total;
        }

        $notas = [10, 5.5, 7.8, 9.8, 7.5];

        $media = mediaTotal($notas);
        
        echo "<h1>Nota total: ".$media."</h1>";



    ?>
</body>
</html>