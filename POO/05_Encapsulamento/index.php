<!DOCTYPE html>
<html lang="pt-BR">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../style.css">
     <title>05: Encapsulamento</title>
</head>
<body>
     <header style="text-align: center">
          <h1>Encapsulamento: Projeto Controle Remoto</h1>
     </header>
     <main>
          <pre>
               <?php
               require_once "ControleRemoto.php";
               $c = new ControleRemoto();
               $c->ligar();
               $c->abrirMenu();
               ?>
          </pre>
     </main>
</body>
</html>