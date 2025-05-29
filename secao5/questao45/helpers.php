<?php
    function media($a, $b) {
        return ($a + $b) / 2;
    }

    function formatarPreco($preco) {
        return "R$ " . number_format($preco, 2, ',', '.');
    }
?>