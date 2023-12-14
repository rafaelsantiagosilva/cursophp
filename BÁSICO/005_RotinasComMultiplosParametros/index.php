<?php
function soma()
{
     // Pega todos os valores e transforma em um array
     $numeros = func_get_args();

     // Armazena a quantidade de números em uma variável
     $quantidade_de_numeros = func_num_args();

     $soma = 0;
     for ($i = 0; $i < $quantidade_de_numeros; $i++) {
          $soma += $numeros[$i];
     }

     return $soma;
}

$soma = soma(1, 2, 3, 4, 5);
echo "A soma é de $soma";
?>