<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo de Idade</title>
</head>
<body>
    <?php
        $anoAtual = date('Y');
        $anoNascimento = $_GET['ano_nascimento'] ?? $anoAtual;
        $ano = $_GET['ano'] ?? $anoAtual;
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano_nascimento">Em que ano você nasceu?</label>
            <input type="number" name="ano_nascimento" id="ano_nascimento" value="<?=$anoNascimento?>">
            <label for="ano">Quer saber a sua idade em que ano? (atualmente estamos em <strong><?=$anoAtual?>)</strong></label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h3>Resultado</h3>
        <?php
            $idade = $ano - $anoNascimento;
            echo "<p>Quem nasceu em $anoNascimento vai ter <strong>$idade anos</strong> em $anoAtual</p>";
        ?>
    </section>
</body>
</html>
