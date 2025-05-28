<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Total de Vendas - 100 Dias</title>

</head>
<body>

<h2>Relatório de Vendas (Dia 1 ao Dia 100)</h2>

<table border="1">
    <thead>
        <tr>
            <th>Dia</th>
            <th>Valor da Venda (R$)</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $totalVendas = 0;

        for ($dia = 1; $dia <= 100; $dia++) {
            // Valor aleatório entre R$ 50,00 e R$ 5.000,00
            $valorVenda = mt_rand(5000, 500000) / 100;
            $totalVendas += $valorVenda;

            // Exibe cada linha da tabela
            echo "<tr>";
            echo "<td>$dia</td>";
            echo "<td>" . number_format($valorVenda, 2, ',', '.') . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td>Total</td>
            <td><?php echo number_format($totalVendas, 2, ',', '.'); ?></td>
        </tr>
    </tfoot>
</table>

</body>
</html>
