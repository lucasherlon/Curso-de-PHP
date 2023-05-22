<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raízes</title>
</head>
<body>
    <?php
        $numero = $_GET['numero'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="numero">Número</label>
        <input type="number" name="numero" id="numero" value="<?=$numero?>">
        <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <?php
            $raiz_quadrada = sqrt($numero);
            $raiz_cubica = pow($numero, 1/3);
            $raiz_quadrada = number_format($raiz_quadrada, 3, ",", ".");
            $raiz_cubica = number_format($raiz_cubica, 3, ",", ".");
            echo "<h2>Resultado final</h2>";
            echo "Analisando o número <strong>$numero</strong>, temos:</p>";
            echo "<ul>";
            echo "<li>A sua raiz quadrada é <strong>$raiz_quadrada</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>$raiz_cubica</strong></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>
