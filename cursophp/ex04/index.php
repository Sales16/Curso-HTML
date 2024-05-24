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
$num = $_GET['n'] ?? 0;
?>
<main>
    <h1>Informe um número</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="n">Número</label>
        <input type="number" name="n" id="n" min="0" value="<?= $num ?>">
        <input type="submit" value="Calcular">
    </form>
</main>
<section>
    <h2>Resultado Final</h2>
    <?php
        $rq = sqrt($num);
        $rc = $num ** (1/3);
        echo "<p>Analisando o número $num, temos:</p>";
    ?>

    <ul>
        <li>A raiz quadrada é <?=$rq?></li>
        <li>A raiz cúbica é <?=$rc?></li>
    </ul>


</section>

</html>