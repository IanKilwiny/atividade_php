<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Status do pedido</title>
</head>
<body>
    <?php 
        $status = true;
    ?>
    <div class="conteiner">
        <h1>
            <?php
                if($status){
                    echo "Pedido entregue!";
                }else{
                    echo "Pedido em andamento...";
                }
            ?>
    </div>
    
</body>
</html>