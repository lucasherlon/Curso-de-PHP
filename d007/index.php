<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salario Minimo</title>
</head>
<body>
    <?php
        $salario = $_GET["salario"] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <p>Considerando um salário mínimo de <strong>R$ 1320,00</strong> </p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
            $salario_minimo = 1320.00;
            $quantidade = floor($salario / $salario_minimo);
            $resto = ($salario / $salario_minimo - $quantidade) * $salario_minimo;
            $salario = number_format($salario, 2, ",", ".");
            $resto = number_format($resto, 2, ",", ".");
            echo "<h2>Resultado Final</h2>";
            echo "<p>Quem recebe um salário de <strong>R$ $salario</strong> ganha <strong>$quantidade</strong>";
            echo " salários mínimos + <strong>R$ $resto</strong>.</p>";
        ?>
    </section>
</body>
</html>
