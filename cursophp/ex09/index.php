<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletronico</title>
    <link rel="stylesheet" href="style.css">
    <style>
    img.nota {
        height: 50px;
        margin: 5px;
    }
    </style>
</head>
<body>
    <?php 
    $saque = $_GET['saque'] ?? 0;
    $resto = $saque;

    $teste = $_GET["x"]??"FUNCIONA" ;
    $teste = $_GET["x"]??"FUNCIONA" ;
    ?>
    <header>
        <h1>Caixa Eletronico</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Valor para saque: R$<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="2" required value="<?=$saque?>">
            <p style="font-size: 0.6"><sup>*</sup>Notas disponiveis: R$100, R$50, R$10, R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
        //100
        $tot100 = floor($resto / 100);
        $resto %= 100;
        //50
        $tot50 = intdiv($resto, 50);
        $resto %= 50;
        //20
        $tot20 = intdiv($resto, 20);
        $resto %= 20;
        //10
        $tot10 = (int)($resto / 10);
        $resto %= 10;
        //5
        $tot5 = (int)($resto / 5);
        $resto %= 5;
        //2
        $tot2 = floor($resto / 2);
        $resto %= 2;
        ?>
        <h2>Saque de R$ <?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletronico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> X <?=$tot100?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> X <?=$tot50?></li>
            <li><img src="imagens/20-reais.jpg" alt="Nota de 20" class="nota"> X <?=$tot20?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> X <?=$tot10?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> X <?=$tot5?></li>
            <li><img src="imagens/2-reais.jpg" alt="Nota de 2" class="nota"> X <?=$tot2?></li>
        </ul>
    </section>
</body>
</html>