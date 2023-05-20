<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Anatomia de uma divisão</title>
</head>
<body>
    <?php
        $dividendo = $_GET['dividendo'] ?? 1;
        $divisor = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <h2>Anatomia de uma Divisão</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <?php
            if ($divisor != 0) {
                $quociente = floor($dividendo/$divisor);
                $resto = $dividendo % $divisor;
            } else {
                echo "<p>Não é possível dividir por zero.<p>";
                $quociente = "Null";
                $resto = "Null";
            }
        ?>
        <h3>Estrutura da divisão</h3>
        <div class="resultado">
            <div class="esquerda">
                <div class="dividendo">
                    <?php
                        echo "<p>$dividendo</p>"
                    ?>
                </div>
                <div class="resto">
                    <?php
                        echo "<p>$resto</p>"
                    ?>
                </div>
            </div>
            <div class="direita">
                <div class="divisor">
                    <?php
                        echo "<p>$divisor</p>"
                    ?>
                </div>
                <div class="quociente">
                    <?php
                        echo "<p>$quociente</p>"
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
