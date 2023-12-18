<?php
// Recebendo e imprimindo array
$array = array(2, 5, 3, 8);
print_r($array);

//Recebendo um array através de uma função
$array = range(0, 20, 2); // Vetor indo de 0 até 20 indo de 2 em 2

// Imprimindo com foreach
foreach ($array as $key => $numero) {
     echo "\n$numero";
}

echo "\n";

// Posições personalizadas
$array = array(1 => "A", 3 => "B", 6 => "C", 8 => "D");
foreach ($array as $key => $value) {
     print("\n$value");
}

echo "\n";

// Adicionando mais um indice
$array[] = "E";
foreach ($array as $key => $value) {
     print("\n$value");
}

echo "\n";

// Tirando um valor de certo índice
unset($array[6]);
foreach ($array as $key => $value) {
     print("\n$value");
}

// "Dicionários" em PHP
$cadastro = array("nome" => "Ana", "idade" => 23, "peso" => 65.5);
foreach ($cadastro as $info => $valor) {
     print("\n$info: $valor");
}

// "Matrizes"
$matriz = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
echo $matriz[2][0]; // Linha 2, coluna 0 -> array 2, indice 0
?>