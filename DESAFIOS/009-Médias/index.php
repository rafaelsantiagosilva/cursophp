<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 009: Médias</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php 
    $valor1 = $_GET['valor1'] ?? 0;
    $valor2 = $_GET['valor2'] ?? 0;
    $peso1 = $_GET['peso1'] ?? 1;
    $peso2 = $_GET['peso2'] ?? 1;
    $mediaSimples = ($valor1 + $valor2)/2;
    $mediaPonderada = ($valor1*$peso1 + $valor2*$peso2)/($peso1 + $peso2);
    ?>
    <main>
        <h2>Médias Aritméticas</h2>
        <form action="./index.php" method="get">
            <label for="valor1">1ºValor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
            <label for="peso1">1ºPeso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="valor2">2ºValor</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
            <label for="peso2">2ºPeso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h3>Cálculo das médias</h3>
        <?php
        echo "<p>Analisando os valores de $valor1 e de $valor2:</p>";
        $mediaSimples = number_format($mediaSimples, 2, ",", ".");
        $mediaPonderada = number_format($mediaPonderada, 2, ",", ".");
        echo <<< LISTA_DAS_MEDIAS
        <ul>
            <li>A <strong>Média Aritmética</strong> entre os valores é igual a $mediaSimples;</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos de $peso1 e $peso2 é de aproximadamente $mediaPonderada.</li>
        </ul>
        LISTA_DAS_MEDIAS;
        ?>
    </section>
</body>

</html>