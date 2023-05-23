<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo de médias</title>
</head>
<body>
    <?php
        $primeiro_numero = $_GET['primeiro_numero'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;
        $segundo_numero = $_GET['segundo_numero'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 1;
    ?>
    <main>
        <h2>Médias Aritméticas</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="primeiro_numero">1º Valor</label>
        <input type="number" name="primeiro_numero" id="primeiro_numero" value="<?=$primeiro_numero?>">
        <label for="peso1">1º Peso</label>
        <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
        <label for="segundo_numero">2º Valor</label>
        <input type="number" name="segundo_numero" id="segundo_numero" value="<?=$segundo_numero?>">
        <label for="peso2">2º Peso</label>
        <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
        <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <?php
            $media_simples = ($primeiro_numero + $segundo_numero) / 2;
            $media_simples = number_format($media_simples, 2, ",", ".");
            $media_ponderada = ($primeiro_numero * $peso1 + $segundo_numero * $peso2) / ($peso1 + $peso2);
            $media_ponderada = number_format($media_ponderada, 2, ",", ".");
            echo "<h3>Cálculo das Médias</h3>";
            echo "<p>Analisandos os valores $primeiro_numero e $segundo_numero:</p>";
            echo "<ul>";
            echo "<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $media_simples.</li>";
            echo "<li>A <strong>Média Ponderada</strong> com pesos $peso1 e $peso2 é igual a $media_ponderada.</li>"
        ?>
    </section>
</body>
</html>
