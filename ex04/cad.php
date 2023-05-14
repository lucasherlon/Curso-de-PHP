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
        <h1>Seja bem-vindo(a)!</h1>
    </header>
    <main>
        <?php
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "É um prazer te conhecer, <strong> $nome $sobrenome</strong>. Este é o meu site!"
        ?>
        <p><a href="index.html">Voltar para a página inicial.</a></p>
    </main>
</body>
</html>
