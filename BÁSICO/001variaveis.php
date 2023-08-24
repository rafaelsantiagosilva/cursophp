<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 01 - Variáveis</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <?php
        $nome = "Rafael";
        $idade = 14;
        $peso = 60.75;
        $peso = number_format($peso, 2, ",", ".");
        echo "<p>Bem-vindo $nome! Você pesa $peso quilos e tem $idade anos!</p>"
        ?>
    </main>
</body>
</html>