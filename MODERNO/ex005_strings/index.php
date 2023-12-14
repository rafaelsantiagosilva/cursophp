<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
<h1>Tipos de strings</h1>

<ol>
    <li>double quoted (aspas duplas) => Existe a interpretação deste conteúdo</li>
    <li>single quoted (aspas simples) => Não há intepretação de conteúdo</li>
    <li>contantes</li>
    <li>misturando aspas</li>
    <li>Sintaxe Heredoc</li>
    <li>Sintaxe Nowdoc</li>
</ol>

<?php
    // 1
    $curso = "Curso";
    $php = "PHP\u{1F418}";
    $outroPhp = 'PHP\u{1F418}';

    echo "<p>$curso" . $php . "(1)</p>"; // Operador de concatenação => .

    // 2
    echo '<p>$curso' . $outroPhp . '(2)</p>';

    // 3 
    const ESTADO = "RJ";

    echo "<p>ESTADO(3)</p>";
    echo '<p>ESTADO(3)</p>';
    echo "<p>" . ESTADO . "(3)</p>";

    // 4
    $nome = "Rodrigo";
    $snome = "Nogueira";
    echo "<p>$nome \"Minotauro\" $snome(4)</p>";

    /* 
        SEQUÊNCIAS DE ESCAPE:
            ->\" - Aspas duplas
            ->\' - Aspas simples
            ->\n - Nova linha, quebra de linha
            ->\t - Tabulação
            ->\\ - Contra barra (\)
            ->\$ - Sifrão
            ->\u{} - Codepoint Unicode
    */

    //5
    $curso2 = "PHP";
    $ano = date('Y');
    echo <<< FRASE
        <p>Estou estudando
                        $curso2 em $ano(5)</p>
    FRASE;

    //6
    echo <<< 'TESTE'
        <p>Estou estudando
                        $curso2 em $ano(6)</p>
    TESTE;
?>
</body>

</html>