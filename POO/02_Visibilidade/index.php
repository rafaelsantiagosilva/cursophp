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
          $c1 = new Caneta;
          $c1->modelo = "BIC Cristal";
          $c1->cor = "Azul";
          // $c1->ponta =  0.5; Não pode pois é private
          // $c1->carga = 100; "" pois é protegido
          // $c1->tampada = true; ""
          
          echo "<section>";
          echo "<h2>var_dump()</h2>";
          echo var_dump($c1);
          echo "</section>";

          echo "<section>";
          echo "<h2>print_r</h2>";
          echo print_r($c1);
          echo "</section>";

          echo "<section>";
          echo "<h2>" . '$c1->rabiscar()' . "</h2>";
          echo $c1->rabiscar();
          echo "</section>";

          ?>
          </pre>
     </main>

</body>

</html>