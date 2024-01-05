<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 007: Quantidade de salário minímo</title>
    <link rel="stylesheet" href="../../../style.css">
</head>

<body>
    <?php
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $salarioMin = 1320.00;
    $userSalario = $_GET["userSalario"] ?? 1320;
    $qntdSalarioMin = intdiv($userSalario, $salarioMin);
    $resto = $userSalario - $qntdSalarioMin * $salarioMin; 
    $resto = numfmt_format_currency($padrao, $resto, "BRL");
    ?>

    <main>
        <h1>Informe o seu salário</h1>
        <form method="get" action="./index.php">
            <label for="userSalario">Salário(R$)</label>
            <input type="number" id="userSalario" name="userSalario" value="<?=$userSalario?>">
            <p>Usando o valor de <strong>R$1320,00</strong> do ano de <strong>2023</strong></p>
            <input type="submit" value="Informar">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php
        echo "<p>Você recebe <strong>$qntdSalarioMin</strong> salários minímos + <strong>$resto</strong>. </p>";
        ?>
    </section>
</body>

</html>