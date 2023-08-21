<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 002: Conversor de R$ para US$</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moeda V.1.0</h1>
    </header>

    <section>
        <?php 
            $reais = $_GET["din"];
            $cotacao = 4.78;
            $dolar = $reais / $cotacao; 

            // echo "<p>Seus R$" .number_format($reais, 2, ",", "."). " equivalem a <strong>US$" .number_format($dolar, 2, ",", "."). "</strong></p>";

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>Seus " .numfmt_format_currency($padrao, $reais, "BRL"). " equivalem a <strong>" .numfmt_format_currency($padrao, $dolar, "USD"). "</strong></p>";
            echo "<p><strong>Cotação fixa de " .numfmt_format_currency($padrao, $cotacao, "BRL"). "</strong>, do dia 19/07/2023</p>"
        
        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
    </section>
</body>
</html>