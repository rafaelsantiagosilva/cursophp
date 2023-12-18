<?php 
$array = [1, 2, 3];

// Adicionando mais um indice com um valor
array_push($array, 4);

// Tirando o último valor
array_pop($array);

// Adicionando mais um valor (0) só que no inicio e realoca os indices
array_unshift($array, 0);

// Removendo o primeiro valor
array_shift($array);

// Colocando em ordem decrescente
rsort($array);

// Colocando em ordem crescente
sort($array);

// Organizando de forma associativa (muda junto com os indices)
arsort($array);

// Organizando de forma crescente SOMENTE os indices
ksort($array);

// Organizando de forma decrescente SOMENTE os indices
krsort($array);
?>