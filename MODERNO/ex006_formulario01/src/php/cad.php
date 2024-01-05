<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php 
            /*  Superglobal -> variável já existente
                    => $_GET -> Para formulários com method get 
                    => $_POST -> "" method post
                    => $_REQUEST -> funciona independente do method, 
                    sendo uma junção dos dois anteriores + $_COOKIES       
            */
            // var_dump($_GET);

            // ?? = Operador de coalescência nula - Caso não veio valor, o que fazer?
            $nome = $_GET["nome"] ?? " -sem nome- ";
            $sobrenome = $_GET["sobrenome"] ?? " -desconhecido- ";

            echo "<p>É um prazer te conhecer $nome $sobrenome!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Volte para a página anterior aqui</a></p>
    </main>
</body>

</html>

