<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 011: Reajustador de Preços</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php
    $percentualReaj = $_POST['porcentagemReaj'] ?? 0;
    $preco = $_POST['preco'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="preco">Preço atual do produto(R$)</label>
            <input type="number" name="preco" id="preco" required min="0" value="<?= $preco ?>">
            <label for="porcentagemReaj">Qual será o percentual de reajuste?</label>
            <input type="number" name="porcentagemReaj" id="porcentagemReaj" required value="<?= $percentualReaj ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $precoReaj = $preco + ($preco * $percentualReaj / 100);
        echo "<p>O reajuste de um produto com o preço de " . numfmt_format_currency($padrao, $preco, "BRL") . ", com o aumento de $percentualReaj%, resulta em <strong>" . numfmt_format_currency($padrao, $precoReaj, "BRL") . "</strong>.</p>";
        ?>
    </section>
</body>

</html>