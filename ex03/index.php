<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php
    //   $num = 0x1A;
    //   echo "O valor da variável é $num.";

    //   $v = "Lucas";
    //   var_dump($v);

    //  $num = 3e2;
    //  var_dump($num);

    // $casado = true;
    // var_dump($casado);

    // vetores suportam múltplos tipos
   // $vetor = [2, "nome", 5, false, 7.5];
   // var_dump($vetor);

    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p)
    ?>
</body>
</html>
