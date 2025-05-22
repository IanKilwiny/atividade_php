<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 10 - Contagem de Palavras</title>
</head>
<body>
    <?php
       $frase = "O Instituto Federal do Ceará (IFCE) é uma instituição de ensino pública e gratuita, voltada à educação profissional, científica e tecnológica. Presente em diversos municípios do estado, oferece cursos técnicos, de graduação e pós-graduação, promovendo ensino, pesquisa e extensão com foco no desenvolvimento regional e na inclusão social.";

       $semEspacos = str_replace(' ', '', $frase);
       $tamSemEspacos = strlen($semEspacos);
       echo "Tamanho: " . $tamSemEspacos;
       
    ?>
</body>
</html>