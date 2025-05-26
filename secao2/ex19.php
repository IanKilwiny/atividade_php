<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definir Salário</title>
</head>
<body>
    <?php
        $cargo = "Desenvolvedor";
        $salarioBase = 0;


        switch ($cargo) {
            case 'Desenvolvedor':
                $salarioBase = 3500;
                break;
            case 'Design':
                $salarioBase = 2500;
                break;
            case 'Gerente':
                $salarioBase = 4200;
                break;
            
            default:
                $salarioBase = 0;
                $cargo = "Indisponível";
                break;
        }

        echo "<h1>Cargo: ".$cargo."</h1>";
        echo "<h1>Salário: ".$salarioBase."</h1>"
    ?>
    
</body>
</html>