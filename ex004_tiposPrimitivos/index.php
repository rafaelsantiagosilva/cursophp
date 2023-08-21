<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PhP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
<?php 
    // ESCALARES
    /*
    $sobrenome = "Silva"; // string
    $idade = 34; // int ou integer
        hexadecimal -> 0x...
        binário -> 0b...
        octal -> 0...
    $peso = 85.9; // float ou double ou real
    $potencia = 3e2; // float
    $casado = true; // boolean ou bool -> true ou false

    echo $casado;
    */

    $num = 300;
    // $num2 = 0x1A;
    // $num3 = 0b1011;
    // $num4 = 010;

    $v = 45;
    $v2 = "Rafael";
    $v3 = 45.9;
    $v4 = true; // mostra 1 e false mostra nada

    $numExtra = 3e2; // 3 * 10²
    $numExtra2 = (int) 3e2; // Forçando que seja int (coerção)

    echo "<p>O valor da variável é $num </p>";
    // echo "O valor da base numérica em hexadecimal é $num2 <br>";
    // echo "O valor da base numérica em binária é $num3 <br>";
    // echo "O valor da base numérica em octal é $num4";

    var_dump($v); // Imprime o valor da variavel e o tipo disso 
    var_dump($v2);
    var_dump($v3);
    var_dump($v4); 

    echo "<br></br>";

    var_dump($numExtra);
    var_dump($numExtra2);
    
    // COMPOSTOS
    // ?

    // ESPECIAIS
    // ?
?>
</body>
</html>