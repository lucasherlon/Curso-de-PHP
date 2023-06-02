<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de tempo</title>
</head>
<body>
    <?php
        $tempo = $_GET['segundos'] ?? 0;
        $segundos = 0;
        $minutos = 0;
        $horas = 0;
        $dias = 0;
        $semanas = 0;
    ?>
    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$tempo?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
            if ($tempo < 60) {
                $segundos = $tempo;
            } elseif ($tempo < 3600) {
                $minutos = floor($tempo / 60);
                $segundos  = $tempo % 60;
            } elseif($tempo < 86400) {
                $horas = floor($tempo / 3600);
                $restoTempo = $tempo - $horas * 3600;
                $minutos = floor($restoTempo / 60);
                $segundos = $restoTempo % 60;
            } elseif($tempo < 604800) {
                $dias = floor($tempo / 86400);
                $restoTempo = $tempo - $dias * 86400;
                $horas = floor($restoTempo / 3600);
                $restoTempo = $tempo - $horas * 3600;
                $minutos = floor($restoTempo / 60);
                $segundos = $restoTempo % 60;
            } else {
                $semanas = floor($tempo / 604800);
                $restoTempo = $tempo - $semanas * 604800;
                $dias = floor($restoTempo / 86400);
                $restoTempo = $restoTempo - $dias * 86400;
                $horas = floor($restoTempo / 3600);
                $restoTempo = $restoTempo - $horas * 3600;
                $minutos = floor($restoTempo / 60);
                $segundos = $restoTempo % 60;
            }
        ?>
        <h3>Totalizando tudo</h3>
        <?php
            echo "<p>Analisando o valor que você digitou, <strong>$tempo segundos</strong> equivalem a um total de:</p>";
            echo "<ul>";
            echo "<li>$semanas semanas</li>";
            echo "<li>$dias dias</li>";
            echo "<li>$horas horas</li>";
            echo "<li>$minutos minutos</li>";
            echo "<li>$segundos segundos</li>";
        ?>
    </section>
</body>
</html>
