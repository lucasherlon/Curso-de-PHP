<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moedas</title>
</head>
<body>
    <header>
        <h1>Conversor de moedas V1.0</h1>
    </header>
    <main>
        <?php
            $val = $_GET["valor"] ?? 0.0;
            $dolar = $val / 4.89;
            $f_val = number_format($val, 2, ",", ".");
            $f_dol = number_format($dolar, 2, ",", ".");
            echo "<p>Seus R$ $f_val equivalem a <strong>US$ $f_dol</strong></p>";
            echo "<p>*Cotação fixa de R$ 4,89 informada diretamente no código</p>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
