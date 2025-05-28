<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar idade</title>
</head>
<body>
    <?php
    
        function elegibilidade($idade){
            if($idade >= 18){
                return "<h1>🟢 Acesso liberado</h1>";
            }

            return "<h1>❌ Acesso não autorizado</h1>";
        }

        echo elegibilidade(16);
    ?>
</body>
</html>