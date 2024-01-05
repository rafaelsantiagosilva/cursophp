<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 012: Calculadora de Tempo</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <?php 
    $segundos = $_GET['seg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <label for="seg">Insira o total de segundos:</label>
        <input type="number" name="seg" id="seg" min="0" step="1" value="<?=$segundos?>"> 
        <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <ul>
            <?php 
            $minutos = $segundos / 60;
            $segundos %= 60;
            $horas = $minutos / 60;
            $minutos %= 60;
            $dias = $horas / 24;
            $horas %= 24;
            $semanas = $dias / 7;
            $dias %= 7;
            $meses = $semanas / 4;
            $semanas %= 4; 
            $anos = $meses / 12;
            $meses %= 12;
            $anos = (int)$anos;

            echo <<< LISTA
            <li>$anos anos;</li>
            <li>$meses meses;</li>
            <li>$semanas semanas;</li>
            <li>$dias dias;</li>
            <li>$horas horas;</li>
            <li>$minutos minutos;</li>
            <li>$segundos segundos.</li>
            LISTA;
            ?>
        </ul>
    </section>
</body>

</html>