<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuadas de 1 a 5</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f3f3;
            padding: 40px;
            text-align: center;
        }

        h1 {
            margin-bottom: 30px;
            color: #333;
        }

        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .tabuada {
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
            width: 180px;
            padding: 15px;
        }

        .tabuada h2 {
            margin-bottom: 10px;
            font-size: 1.2em;
            color: #0066cc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 6px;
            text-align: left;
            border-bottom: 1px solid #eee;
            font-size: 1em;
        }

        td:last-child {
            text-align: right;
        }
    </style>
</head>
<body>

<h1>Tabuadas de 1 a 5</h1>

<div class="container">
    <?php
    for ($n = 1; $n <= 5; $n++) {
        echo "<div class='tabuada'>";
        echo "<h2>Tabuada do $n</h2>";
        echo "<table>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $n * $i;
            echo "<tr><td>$n × $i</td><td>$resultado</td></tr>";
        }
        echo "</table>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
