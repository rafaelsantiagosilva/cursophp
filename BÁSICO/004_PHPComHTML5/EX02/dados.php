<?php
$texto_digitado = $_REQUEST["texto"];
$tamanho = $_REQUEST["tamanho"];
$cor = $_REQUEST["cor"];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>004: PHP com HTML5</title>
     <link rel="stylesheet" href="../../../style.css">
     <style>
          p#texto_digitado {
               background-color: white;
               border: 1px solid black;
               border-radius: 5px;
               padding: 1em;
               font-size:
                    <?php echo $tamanho ?>
               ;
               color:
                    <?php echo $cor ?>
               ;
          }
     </style>
</head>

<body>
     <header>
          <h1>Formulários</h1>
     </header>

     <main>
          <form>
               <label for="texto_digitado">Texto</label>
               <p id="texto_digitado">
                    <?php echo $texto_digitado ?>
               </p>
          </form>
     </main>
</body>

</html>