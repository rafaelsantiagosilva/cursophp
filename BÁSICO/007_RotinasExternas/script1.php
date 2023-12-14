<?php
// Inclui o arquivo com funções externas.
// Caso não dê para incluir, vai continuar tentando.
// include "./funcoes.php"; -> carrega toda vez que chamar
include_once "./funcoes.php"; // include_once: só carrega uma vez

$numero = 4;

eh_primo($numero);
eh_par($numero);
?>