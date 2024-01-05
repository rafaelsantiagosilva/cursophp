<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 005: Analisador de número real</title>
    <link rel="stylesheet" href="../../../style.css">
</head>
<body>
    <main>
        <h1>Separando Parte Inteira Da Decimal</h1>
        <?php 
            $num = $_POST["numero"] ?? 0;
            
            echo("<p>Analisando o número ".number_format($num, 3, ",", ".")." informado pelo usuário...</p>");

            $int = (int)$num;
            $frac = $num - $int;
    

            echo("
                <ul>
                    <li>A parte inteira do número é de ".number_format((int)$int, 0, ",", ".")."</li>
                    <li>A parte fracionária do número é de ".number_format($frac, 3, ",", ".")."</li>
                </ul>
            ")
        ?>
    </main>
</body>
</html>