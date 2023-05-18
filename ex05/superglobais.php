<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Superglobais PHP</title>
</head>
<body>
    <main>
        <pre>
            <?php
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
                session_start();
                $_SESSION["teste"] = "FUNCIONOU";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET); // recebe os valores pela URL
                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST); // recebe os valores pelo form
                echo "<h1>Superglobal REQUEST</h1>"; // recebe ambos
                var_dump($_REQUEST);
                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);
                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);
                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);
                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);
                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>
