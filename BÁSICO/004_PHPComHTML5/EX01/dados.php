<!DOCTYPE html>
<html lang="pt-br">

<head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>004: PHP com HTML5</title>
     <link rel="stylesheet" href="../../../style.css">
</head>

<body>
     <header>
          <h1>Formulários</h1>
     </header>
     <main>
          <?php
          $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
          $ano_de_nascimento = isset($_GET["ano_de_nascimento"]) ? $_GET["ano_de_nascimento"] : 0;
          $idade = intval(date('Y')) - intval($ano_de_nascimento);
          $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";
          echo "<h3>$nome é $sexo e tem $idade anos!</h3>"
          ?>
     </main>
</body>

</html>