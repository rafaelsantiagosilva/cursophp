<?php 
// abs() mostra o valor absoluto, como se fosse um módulo
echo abs(5);
echo "\n";
echo abs(-5);

// pow() é a potência
echo pow(3, 2); // -> 3^2
echo "\n";
echo pow(2, 3); // -> 2^3

// sqrt() é a raíz quadrada
echo "\n";
echo sqrt(4);
echo "\n";
echo sqrt(9);

// round() é para arredondar
echo "\n";
echo round(2.1);
echo "\n";
echo round(3.8);

// intval() é para pegar a parte inteira da variável
echo "\n";
echo intval(42.1234567);
echo "\n";
echo intval(76.99999999999);

// number_format() para formatar números
echo "\n";
echo number_format(1399.456, 2, ",", "."); // -> Formatando com duas casas decimais e , como separador decimal e . para milhar
?>