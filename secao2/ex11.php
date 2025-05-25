<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 11 - Verificar idade</title>
</head>
<body>
   <?php
        $idade = 19;

        if($idade >= 18){
            echo "<h1>Acesso liberado</h1>";
        }else{
            echo "<h1>Acesso negado</h1>";
        }
   ?> 
</body>
</html>