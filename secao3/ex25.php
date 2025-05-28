<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excessão em Relatório</title>
</head>
<body>
    <?php
       $listaAlunos = [
        1 => [
            "nome" => "Carlos Henrique Silva",
            "matricula" => "01",
            "nota" => 8.5
        ],
        2 => [
            "nome" => "Ana Beatriz Oliveira",
            "matricula" => "02",
            "nota" => 9.2
        ],
        3 => [
            "nome" => "Bruno Miguel Costa",
            "matricula" => "03",
            "nota" => 7.4
        ],
        4 => [
            "nome" => "Daniela Ramos Pereira",
            "matricula" => "04",
            "nota" => 6.8
        ],
        5 => [
            "nome" => "Eduardo Lima Martins",
            "matricula" => "05",
            "nota" => 8.0
        ],
        6 => [
            "nome" => "Fernanda Souza Rocha",
            "matricula" => "06",
            "nota" => 9.0
        ],
        7 => [
            "nome" => "Gabriel Alves Monteiro",
            "matricula" => "07",
            "nota" => 5.5
        ],
        8 => [
            "nome" => "Helena Duarte Freitas",
            "matricula" => "08",
            "nota" => 7.8
        ],
        9 => [
            "nome" => "Igor Fernandes Barros",
            "matricula" => "09",
            "nota" => 6.3
        ],
        10 => [
            "nome" => "Julia Castro Lima",
            "matricula" => "10",
            "nota" => 8.9
        ]
    ];

    ?>


    <table border="1">
         <tr>
                <td>Matricula</td>
                <td>Nome</td>
                <td>Nota</td>
        </tr>

    <?php foreach ($listaAlunos as $aluno): ?>
            <tr>
                <td><?= $aluno["matricula"] ?></td>
                <td><?= $aluno["nome"] ?></td>
                <td><?= $aluno["nota"] ?></td>
            </tr>
    <?php endforeach; ?>
    </table>

</body>

</html>