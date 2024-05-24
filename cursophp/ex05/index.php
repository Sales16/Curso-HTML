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
$n1 = $_GET['n1'] ?? 0;
$p1 = $_GET['p1'] ?? 0;
$n2 = $_GET['n2'] ?? 0;
$p2 = $_GET['p2'] ?? 0;
?>
<main>
    <h1>Médias aritiméticas</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="n1">Valor 1</label>
        <input type="number" name="n1" id="n1" min="0" value="<?= $n1 ?>">
        <label for="p1">Peso 1</label>
        <input type="number" name="p1" id="p1" min="0" value="<?= $p1 ?>">
        <label for="n2">Valor 2</label>
        <input type="number" name="n2" id="n2" min="0" value="<?= $n2 ?>">
        <label for="p2">Peso 2</label>
        <input type="number" name="p2" id="p2" min="0" value="<?= $p2 ?>">
        <input type="submit" value="Calcular">
    </form>
</main>
<section>
    <h2>Médas</h2>
    <?php
        $ms = ($n1 + $n2) / 2;
        $mp = ($n1 * $p1 + $n2 * $p2) / ($p1 + $p2);
        echo "<p>Analisando os valroes $n1 e $n2, temos:</p>";
    ?>

    <ul>
        <li>A Média Aritimetica Simples: <?=number_format($ms, 2)?></li>
        <li>A Média Aritimetica Ponderada: <?=number_format($mp, 2)?></li>
    </ul>


</section>

</html>