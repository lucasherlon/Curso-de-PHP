<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de número real</title>
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <?php
            $val = $_GET["valor"];
            $inteiro = floor($val);
            $dec = $val - $inteiro;
            $dec = number_format($dec, 2, ",", ".");
            $val = number_format($val, 2, ",", ".");
            echo "<p>Analisando o número <strong>$val</strong> informado pelo usuário</p>";
            echo "<ul>";
            echo "<li> A parte inteira do número é $inteiro";
            echo "<li> A parte fracionária do número é $dec";
            echo "</ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
