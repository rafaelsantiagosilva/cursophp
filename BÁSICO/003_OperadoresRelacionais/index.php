<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>003: Operadores Relacionais</title>
     <link rel="stylesheet" href="../style.css">
</head>

<body>
     <main>
          <?php
          // Entrada de dados pela URL
          $numero1 = (float) $_GET["n1"];
          $numero2 = (integer) $_GET["n2"];
          $opcao = $_GET["opc"];
          echo "<p>Os valores passados foram $numero1 e $numero2. A escolha foi de $opcao</p>";

          // Realizando o cálculo
          $resultado = ($opcao == "s") ? $numero1 + $numero2 : $numero1 * $numero2;

          // Saída de dados
          echo "<p>O resultado é $resultado</p>";
          ?>
     </main>
</body>

</html>

<?php


// // Maior
// 5 > 3;

// // Menor
// 3 < 5;

// // Maior ou igual
// 5 >= 3;
// 5 >= 5;

// // Menor ou igual
// echo 3 <= 5;
// echo 3 <= 3;

// // Diferente
// echo 3 != 5;
// echo 3 <> 5;

// // Igual
// echo 3 == 3;
// echo 3 == "3";

// // Idêntico
// echo 3 === 3;
// echo 3 === "3";

// // Ternário
// /* Retorna "Sim" se for verdadeiro e "Não" se for falso*/
// echo 3 > 5 ? "Sim" : "Não";
?>