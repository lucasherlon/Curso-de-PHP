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
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $val = $_GET["valor"] ?? 0.0;
        $dolar = $val / $cotacao;
        $f_val = number_format($val, 2, ",", ".");
        $f_dol = number_format($dolar, 2, ",", ".");
        echo "<p>Seus R$ $f_val equivalem a <strong>US$ $f_dol</strong></p>";
        echo "<p>*Cotação do dólar retirada da API do BC</p>"
        ?>
        <button><a href="index.html">Voltar</a></button>
    </main>
</body>
</html>
