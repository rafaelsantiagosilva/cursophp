<!DOCTYPE html>
<html lang="pt-br">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>02: Visibilidade de Objetos</title>
     <link rel="stylesheet" href="../../style.css">
</head>

<body>
     <header>
          <h1>Visibilidade de Objetos</h1>
     </header>

     <main>
          <pre>
          <?php

          require_once "Caneta.php";

          // Usando constructor
          $c1 = new Caneta("Bic", "Azul", 0.5);

          // Usando Setters
          $c1->setModelo("Bic");
          $c1->setPonta(0.5);

          echo "<section>";
          echo "<h2>var_dump()</h2>";
          echo var_dump($c1);
          echo "</section>";

          echo "<section>";
          echo "<h2>print_r</h2>";
          echo print_r($c1);
          echo "</section>";
          ?>
          </pre>
     </main>

</body>

</html>