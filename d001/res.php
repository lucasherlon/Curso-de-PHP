<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php
            $num = $_GET["numero"];
            $sucessor = $num + 1;
            $antecessor = $num - 1;
            echo "<p>O número escolhido foi <strong>$num</strong></p>";
            echo "<p>O seu antecessor é $antecessor</p>";
            echo "<p>O seu sucesso é $sucessor</p>"
        ?>
        <button>
            <a href="index.html">Voltar</a>
        </button>
    </main>
</body>
</html>
