<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pex01 copyHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
            $numero = $_GET["numero"] ?? 0;
            echo "<p>O seu antecessor é ". $numero - 1 ." </p>";
            echo "<p>O seu sucessor é ". $numero + 1 ." </p>";
        ?>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>

</html>