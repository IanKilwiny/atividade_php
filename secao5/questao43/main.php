<h1>Meu arquivo Main em PHP</h1>
<p> Nessa questão contamos com três arquivos diferentes! </p>
<?php
    $lista = ["header", "main", "footer"];

    echo "<ul>";

    foreach ($lista as $key => $li) {
         echo "<li>".$li."</li>";
    }

    echo "</ul>";
?>