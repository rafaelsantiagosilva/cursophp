<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERGLOBAIS</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
                
                session_start();
                $_SESSION = "FUNCIONOU!";

                echo "<h1>SUPERGLOBAL GET</h1>";
                var_dump($_GET);
                echo "<h1>SUPERGLOBAL POST</h1>";
                var_dump($_POST);
                echo "<h1>SUPERGLOBAL REQUEST</h1>";
                var_dump($_REQUEST);

                /*  OUTRAS SUPERGLOBAIS 
                    -> $_COOKIE: informações sobre os cookies
                    -> $_FILES: pegar os dados de arquivos
                    -> $_SESSION: permite que variáveis de seesão possam ser utilizadas
                    -> $_ENV: variáveis do ambiente do servidor
                    -> $_SERVER: informações do servidor
                    -> $GLOBALS: mostra o dado de todas as outras superglobais
                */

                echo "<h1>SUPERGLOBAL COOKIE</h1>";
                var_dump($_COOKIE);


                echo "<h1>SUPERGLOBAL SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>SUPERGLOBAL ENV</h1>";
                var_dump($_ENV);

                echo "<h1>SUPERGLOBAL SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>SUPERGLOBAL GLOBALS</h1>";
                var_dump($GLOBALS);

            ?>
        </pre>
    </main>
</body>
</html>