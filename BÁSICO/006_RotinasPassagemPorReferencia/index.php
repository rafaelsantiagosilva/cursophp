<?php 
// Aqui o valor da variável que é passada como procedimento é alterado
function soma_dois(&$n) : int {
     $n += 2;
     return $n;
}

$n = 2;
soma_dois($n);
echo $n;
?>