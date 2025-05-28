<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ciclo de Produção</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }
        th, td {
            border: 1px solid #888;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f0f0f0;
        }
        caption {
            margin-bottom: 10px;
            font-size: 1.4em;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
$producao = [];       // Array para armazenar cada quantidade produzida
$quantidadeTotal = 0; // Total acumulado
$ciclo = 1;

while ($quantidadeTotal < 5) {
    // Simula a produção de 1 unidade por ciclo
    $quantidadeProduzida = 1;

    // Atualiza total e adiciona ao array
    $quantidadeTotal += $quantidadeProduzida;
    $producao[] = $quantidadeTotal;

    $ciclo++;
}
?>

<table>
    <caption>Ciclo de Produção</caption>
    <thead>
        <tr>
            <th>Ciclo</th>
            <th>Quantidade Acumulada</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($producao as $index => $quantidade): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $quantidade ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
