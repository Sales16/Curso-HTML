<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porcentagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Porcentagem</h1>
    </header>
    <?php 
    $preco = $_GET['valor'] ?? 0;
    $reajuste = $_GET['reaj'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Preço R$:</label>
            <input type="number" name="valor" id="valor" min="0.1" step="0.01" value="<?=$preco?>" required>

            <label for="reaj">Reajuste (<span id="p">?</span>%)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" value="<?=$reajuste?>"
                oninput="mudarValor()">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
        $novo = $preco + ($preco * $reajuste / 100);
        ?>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$ <?=number_format($preco, 2, ",", ".")?>, com o <?=$reajuste?>% de aumento</p>
        <p>vai passar a custar <?=number_format($novo, 2, ",", ".")?></p>
    </section>
    <script>
    mudarValor();

    function mudarValor() {
        p.innerText = reaj.value;
    }
    </script>
</body>
</html>