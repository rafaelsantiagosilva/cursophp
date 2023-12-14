<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 002: Trabalhando com números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        /* Funções de Geração de Números Aleatórios */
        // rand(min, max) => Antigo
        // mt_rand(min, max) => Atual
        // random_int(min, max) => Segurança, porém mais lento

        $min = 0;
        $max = 100;
        $numeroAle = mt_rand($min, $max);

        echo ("
                <h1>Trabalhando com números aletórios!</h1>
                <p>Gerando número aleatório entre <strong>$min e $max</strong>...</p>
                <p>O número gerado foi <strong>$numeroAle</strong></p>");
        ?>
        <button onclick="javascript:document.location.reload()">Gerar Outro!</button>
    </main>

</body>

</html>