<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log de Eventos</title>
</head>
<body>
    <?php
    function registrarEvento($mensagem, $arquivoLog = 'log_eventos.txt') {
        $timestamp = date("Y-m-d H:i:s");
        $log = "[$timestamp] $mensagem" . PHP_EOL;
        
        file_put_contents($arquivoLog, $log, FILE_APPEND);
    }

 
    registrarEvento("Usuário realizou login.");
    registrarEvento("Pedido #1234 finalizado.");
?>

</body>
</html>