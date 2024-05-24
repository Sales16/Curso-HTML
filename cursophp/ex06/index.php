<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
</body>
<?php
$atual = date('Y');
$nasc = $_GET['nasc'] ?? 2000;
$ano = $_GET['ano'] ?? $atual;
?>
<main>
    <h1>Idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nasc">Ano Nascimento:</label>
        <input type="number" name="nasc" id="nasc" max="<?=$atual?>" value="<?= $nasc ?>">
        <label for="ano">Quer saber a idade em que ano? (Atualmente estamos em <?=$atual?>)</label>
        <input type="number" name="ano" id="ano" min="100" value="<?= $ano ?>">
        <input type="submit" value="Calcular">
    </form>
</main>
<section>
    <h2>Resultado</h2>
    <?php
    $idade = $ano - $nasc;
    ?>
    <p>Quem nasceu em <?=$nasc?> vai ter <?=$idade?> anos em <?=$ano?></p>

</section>

</html>