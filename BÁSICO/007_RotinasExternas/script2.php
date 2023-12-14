<?php
// Caso dê errado a função, o código para por ali
// require "./funcoes.php";  -> carrega toda vez que chamar
require_once "./funcoes.php"; // require_once: só vai carregar uma vez

$numero = 7;

eh_par($numero);
eh_primo($numero);
?>