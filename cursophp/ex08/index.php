<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo em segundos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $seg = $_GET['seg'] ?? 0;
    $sobra = $seg;
    ?>
    <header>
        <h1>Tempo em segundos</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Segundos:</label>
            <input type="number" name="seg" id="seg" min="0" step="1" value="<?=$seg?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
            //Ano
            $ano = intdiv($sobra, 31536000); 
            $sobra = $sobra % 31536000;
            //Semana
            $semana = intdiv($sobra, 604800);
            $sobra = $sobra % 604800;
            //Dia
            $dia = intdiv($sobra, 86400);
            $sobra = $sobra % 86400;
            //Hora
            $hora = intdiv($sobra, 3600);
            $sobra = $sobra % 3600;
            //Minuto
            $minuto = intdiv($sobra, 60);
            $sobra = $sobra % 60;
            //Segundo
            $segundo = $sobra;
        ?>
        <h2>Resultado</h2>
        <p>Anaisando o Valor <?=number_format($seg, 0, ",", ".")?> segundos, temos:</p>
        <ul>
            <li><?=$ano?> Anos</li>
            <li><?=$semana?> Semanas</li>
            <li><?=$dia?> Dias</li>
            <li><?=$hora?> Horas</li>
            <li><?=$minuto?> Minutos</li>
            <li><?=$segundo?> Segundos</li>
        </ul>
    </section>
</body>
</html>