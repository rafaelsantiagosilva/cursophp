<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios 008: Raízes de um número</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php 
    $numero = $_GET['num'] ?? 0;
    $raiz = sqrt($numero);
    $raizCubica = $numero ** (1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="./index.php" method="get">
            <label for="num">Digite um número:</label>
            <input type="number" name="num" id="num" required value="<?=$numero?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>As raízes dele são:</h2>
        <ul>
            <?php 
            echo "<li>A raíz quadrada dele é de " . number_format($raiz, 3, ",", ".") .";</li>";
            echo "<li>A raíz cúbica dele é de "  . number_format($raizCubica, 3, ",", ".") .".</li>";
            ?>
        </ul>
    </section>
</body>

</html>