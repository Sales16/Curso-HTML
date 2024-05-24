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
$minimo = 1412;
$sal = $_GET['sal'] ?? 0;
?>
<main>
    <h1>Salário minimo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="sal">Salário</label>
        <input type="number" name="sal" id="sal" min="0" value="<?= $sal ?>" step="0.01">
        <p>Considerando o salário minimo de<strong> R$ <?=number_format($minimo, 2, ",", ".")?></strong></p>
        <input type="submit" value="Calcular">
    </form>
</main>
<section>
    <h2>Resultado</h2>
    <?php
    $total = intdiv($sal, $minimo);
    $diferenca = $sal % $minimo;

    echo "<p>Quem recebe R\$ ".number_format($sal, 2, ",", ".").", ganha $total salários minimos e + R\$".number_format($diferenca, 2, ",", ".")
    ?>

</section>

</html>