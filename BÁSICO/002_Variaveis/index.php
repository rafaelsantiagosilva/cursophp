<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>002: Variáveis</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <main>
        <?php
        // Inteiros
        $numInt1 = (int) 1;
        $numInt2 = (integer) 2;

        // Float
        // Fui removido! $numFloat1 = (real)0.5;
        $numFloat2 = (float) 0.5;
        $numFloat3 = (double) 0.5;

        // Strings
        $string1 = (string) "Meu nome é Rafael!";

        // "Lógicos"
        $casado1 = (bool) 1; // True
        $casado2 = (bool) 0; // False
        
        // Convertendo
        $minhaIdadeString = "15";
        $minhaIdadeInt = (integer) $minhaIdadeString;
        $minhaIdadeInt += 3;

        echo "<h1>$string1</h1>";
        echo "<h2>Tenho $minhaIdadeString anos. Daqui 3 anos vou ter $minhaIdadeInt</h2>";
        echo 'Posso concatenar também: ' . $string1 . ' E tenho ' . $minhaIdadeString . ' anos!';
        ?>
    </main>
</body>

</html>