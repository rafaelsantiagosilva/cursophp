<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 006: Estrutura de uma divisão</title>
    <style>
        .container > div{
            width: 100px;
            height: 100px;
            text-align: center;
        }

        .div2{
            border-bottom: 3px solid black;
        }

        .div2, .div4{
            border-left: 3px solid black;
            padding-left: 25px;
        }

        .container{
            display: flex;
        }

        p{
            font-size: 2em;
        }

        .sublinhado{
            text-decoration: underline;
        }
    </style>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
        $resto = $dividendo % $divisor;
        $quociente = intdiv($dividendo, $divisor);
    ?>

    <main>
        <h1>Anatomia de uma divisão</h1>
        <form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
            <label for="dividendo">Dividendo</label>
            <input type="number" id="dividendo" name="dividendo" required value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" required value="<?=$divisor?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Estrutura da divisão</h2><br>
        <?php 
            echo <<< CONTAINER
                    <div class="container">
                        <div class="div1">
                            <p>$dividendo</p>
                        </div>
                    
                        <div class="div2">
                            <p>$divisor</p>
                        </div>
                    </div>

                    <div class="container">
                        <div class="div3">
                            <span class="sublinhado">
                                <p>$resto</p>
                            </span>
                        </div>
                        <div class="div4">
                            <p>$quociente</p>
                        </div>
                    </div>
            CONTAINER;
        ?>
    </section>
</body>

</html>