<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01: Sucessor e Antecessor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>

        <?php
            $numero = $_POST["num"];
            $sucessor = $numero + 1;
            $antecessor = $numero -1;

            echo <<< PARAGRAFOS
                <p>O número digitado foi $numero</p>    
                <p>O seu sucessor é $sucessor</p>  
                <p>E o seu antecessor é $antecessor</p>  
            PARAGRAFOS;
        ?>

        <a href="javascript:history.go(-1)"><input type="button" value="← Voltar"></a>
    </main>
</body>

</html>