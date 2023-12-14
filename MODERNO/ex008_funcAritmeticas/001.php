<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções artméticas</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: gray;
        }

        p {
            background-color: blue;
            color: white;
            text-align: center;
            padding: 10px;
        }

        ol {
            background-color: pink;
            width: 100%;
            margin: 0 auto;
        }


    </style>
</head>
<body>
    <ol>
        <li>abs(variável) -> Valor absoluto, sem o sinal</li>
        <li>base_convert(variável, base atual, base que quer converter) -> Conversão de base</li>
        <li>Arredondamento
            <ol>
                <li>ceil() -> Pra cima</li>
                <li>floor() -> Pra baixo</li>
                <li>round() -> Pro mais próximo</li>
            </ol>
        </li>
        <li>hypot() -> Hipotenusa</li>
        <li>intdiv() -> Divisão inteira</li>
        <li>min() -> Valor minímo e max() -> Valor máximo de uma sequência</li>
        <li>pi() -> Valor de PI</li>
        <li>pow(base, expoente) -> Potência; OBS: Perde a ordem de precedência</li>
        <li>Trignométricas
            <ol>
                <li>sin() -> seno</li>
                <li>cos() -> cosseno</li>
                <li>tan() -> tangente</li>
            </ol>
        <li>sqrt(base) -> Raíz quadrada === base ** (1/2)
            <ul><li>Demais raízes: variável ** (1/expoente)</li></ul>
        </li>
        </li>
    </ol>
</body>
</html>
<?php 
    //abs()
    $r = -2000;
    $r = abs($r);
    print "<p>$r(1)</p>";

    //base_convert()
        // hexadecimal 0x
        echo "<p>" . base_convert($r, 10, 16) . "(2)</p>";

        // octal
        echo "<p>" . base_convert($r, 10, 8) . "(2)</p>";

        // binário
        echo "<p>" . base_convert($r, 10, 2) . "(2)</p>";
    
    //intdiv()
        $resultado = intdiv(5, 2);
        echo "<p>2 / 5 = $resultado(5)</p>";
    
    //min(), max()
        $max = max(1, 2, 3, 4, 5);
        $min = min(1, 2, 3, 4, 5);
        echo "<p>De 1 a 5: Max:$max; Min:$min(6)</p>";

    //pi()
        // Função
        $pi1 = pi();

        //Constante
        $pi2 = M_PI;

        echo "<p>$pi1 e $pi2(7)</p>"; 
    
    //pow()
        $potencia = pow(3, 2);
        echo "<p>$potencia(8)</p>";

    //sqrt()
        $raizQuadrada = sqrt(81);
        echo "<p>$raizQuadrada(10)</p>";
?>