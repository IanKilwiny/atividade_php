<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor = 2;

        function eImparOuPar($valor){
            return $valor % 2 == 0;
        };


       if(eImparOuPar($valor)){
            echo "<h1> É par </h1>";
       }else{
            echo "<h1> É ímpar </h1>";
       }
    ?>
</body>
</html>