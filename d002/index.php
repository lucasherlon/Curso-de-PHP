<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de número aleatório</title>
</head>
<body>
    <header>
        <h1>Gerador de número aleatório</h1>
    </header>
    <main>
        <?php
            echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
            $aleat = rand(0,100);
            echo "<p>O número gerado foi <strong>$aleat</strong></p>";
        ?>
        <button id="gerador">Gerar outro número</button>
    </main>
    <script src="script.js"></script>
</body>
</html>
