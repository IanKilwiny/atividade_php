<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Participantes</title>
</head>
<body>
    <?php
        $listaParticipantes = ["Pedro", "Arthur", "Diego", "Paulo", "Roberto", "Júnio"];

        foreach ($listaParticipantes as $key => $participante) {
            echo "<h1>".$key." ".$participante."</h1>";
        }
    ?>
    
</body>
</html>