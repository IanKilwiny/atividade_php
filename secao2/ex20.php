<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Senha</title>
</head>
<body>
    <?php
        $estaAtivo = true;
        $administrador = false;

        if($estaAtivo && $administrador){
            echo "<h1>Usuário tem permissão de acesso</h1>";
        }elseif($estaAtivo && $administrador == false){
            echo "<h1>O Usuário está ativo, mas não é administrador</h1>";
        }else{
            echo "<h1>Usuário Inativo</h1>";
        }
    ?>
</body>
</html>