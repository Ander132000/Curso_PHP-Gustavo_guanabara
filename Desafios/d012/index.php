<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $in = $_GET['in'] ?? '';
        $semanas  =  (int)$in / 60 / 60 / 24 / 7;
        $dias     =  ( (int)$in / 60 / 60 / 24) % 7;
        $horas    = ( (int)$in / 60 / 60) % 24;
        $minutos  = ( (int)$in / 60) % 60;
        $segundos = (int)$in % 60;
    ?> 
 
    <main>
       
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="in">Qual é o total de segundos?</label>
        <input type="number" name="in" id="in" value="<?=$in?>">
        <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizanado tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format((int)$in,0,".",".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=number_format($semanas,0)?> semanas</li>
            <li><?=number_format($dias,0)?> dias</li>
            <li><?=number_format($horas,0)?> horas</li>
            <li><?=number_format($minutos,0)?> minutos</li>
            <li><?=number_format($segundos,0)?> segundo</li>
        </ul>
    </section>
</body>
</html>