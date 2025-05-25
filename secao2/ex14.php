<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Semanal</title>
</head>
<body>
    <?php
       $dia = 2;

       switch($dia){
            case 1:
                echo "<h1>Domingo</h1>";
                break;
            case 2:
                echo "<h1>Segunda</h2>";
                break;
            case 3:
                echo "<h1>Terça</h1>";
                break;
            case 4:
                echo "<h1>Quarta</h1>";
                break;
            case 5:
                echo "<h1>Sexta</h1>";
                break;
            case 6:
                echo "<h1>Sábado</h1>";
            default:
                echo "<h1>Não encontrado o dia da semana!</h1>";
       }
    ?>
</body>
</html>