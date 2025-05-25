<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Avaliação</title>
</head>
<body>
    <?php
        $nota1 = 10;
        $nota2 = 6.35;

        $media = ($nota1 + $nota2) / 2;

        if($media >= 7){
            echo "<h1> Aluno Aprovado! </h1>";
            echo "<p> Media: ".$media."</p>";
        }elseif($media >= 5 && $media <= 6.9){
            echo "<h1> Aluno em Recuperação! </h1>";
             echo "<p> Media: ".$media."</p>";
        }else{
            echo "<h1> Aluno Reprovado! </h1>";
             echo "<p> Media: ".$media."</p>";
        }
    ?>
</body>
</html>