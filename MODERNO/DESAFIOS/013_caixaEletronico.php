<!-- INCOMPLETO -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 013: Caixa Eletrônico</title>
    <link rel="stylesheet" href="../../style.css">
    <style>
        img{
            height: 25%;
            width: 25%;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <main>
        <?php
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $dinheiro = $_POST['dinheiro'] ?? 0;
        ?>
        <h2>Caixa Eletrônico</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="dinheiro">Quantos reais você deseja sacar?</label>
            <input type="number" name="dinheiro" id="dinheiro" value="<?=$dinheiro?>" required step="5">
            <p>*somente notas de 100, 50, 10 e 5 reais</p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Saque de <?php echo numfmt_format_currency($padrao, $dinheiro, "BRL") ?> realizado!</h2>
        <ul>
            <?php
            $notasCem = intdiv($dinheiro, 100);
            $notasCinquenta = intdiv(($dinheiro - $notasCem * 100), 50);
            $notasDez = intdiv(($dinheiro - $notasCem * 100 - $notasCinquenta * 50), 10);
            $notasCinco = intdiv(($dinheiro - $notasCem * 100 - $notasCinquenta * 50 - $notasDez * 10), 5);
            echo <<< NOTAS
            <li><img src="./img/_13/cemreais.jpg"> x$notasCem</li>
            <li><img src="./img/_13/cinquentareais.png"> x$notasCinquenta</li>
            <li><img src="./img/_13/dezreais.jpg"> x$notasDez</li>
            <li><img src="./img/_13/cincoreais.jpg"> x$notasCinco</li>
            NOTAS;
            ?>
        </ul>
    </section>
</body>

</html>