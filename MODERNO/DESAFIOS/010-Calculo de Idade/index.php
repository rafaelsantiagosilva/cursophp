<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 010: Cálculo de Idade</title>
    <link rel="stylesheet" href="../../../style.css">
</head>

<body>
    <?php 
        $anoNasc = $_GET['anoNasc'] ?? 2000;
        $anoAtual = date("Y");
        $ano = $_GET['ano'] ?? $anoAtual;
    ?>
    <main>
        <h2>Calculando sua Idade</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <label for="anoNasc"><strong>Em que ano você nasceu?</strong></label>
        <input type="number" name="anoNasc" id="anoNasc" required value="<?=$anoNasc?>" min="1" max="<?=$ano?>" step="1">
        <label for="ano">Quer saber sua idade em qual ano?(atualmente estamos no ano de <strong><?php echo date("Y")?></strong>)</label>
        <input type="number" name="ano" id="ano" required value="<?=$ano?>" min="<?=$anoNasc?>" step="1">
        <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php
            $idadeFutura = $ano - $anoNasc;
            echo "<p>Você vai ter <strong>$idadeFutura</strong> anos em <strong>$ano</strong>.</p>"
        ?>
    </section>
</body>

</html>