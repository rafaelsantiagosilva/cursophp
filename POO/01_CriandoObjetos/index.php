<!DOCTYPE html>
<html lang="pt-br">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>01: Objetos e Classes em PHP</title>
     <link rel="stylesheet" href="../../style.css">
</head>

<body>
     <header>
          <h1>Objetos e Classes em PHP</h1>
     </header>

     <main>
          <?php

          require_once "Caneta.php";
          $c1 = new Caneta;
          $c1->cor = "Azul";
          $c1->ponta = 0.5;
          $c1->tampada = false;
          $c1->carga = 100;
          $c1->modelo = "BIC";

          echo "<section>";
          echo "<h2>var_dump()</h2>";
          echo var_dump($c1);
          echo "</section>";

          echo "<section>";
          echo "<h2>print_r</h2>";
          echo print_r($c1);
          echo "</section>";

          echo "<section><h2>$c1->cor</h2></section>";

          ?>
     </main>

</body>

</html>