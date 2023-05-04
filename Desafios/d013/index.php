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
    <main>
        <?php 
            $in = $_GET['in'] ?? '';
            $cem = intdiv($in,100);
            $cinquenta = intdiv(($in % 100),  50);
            $dez       = intdiv(($in % 100) % 50 , 10);
            $cinco     = ($in % 100) % 10 / 5;
        ?>
        <h2>Caixa Eletrônico</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="in">Qual valor você desejar sacar? (R$)</label>
            <input type="number" name="in" id="in" value="<?=$in?>" step="5">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    
    <section>
        <h2>Saque de R$<?=number_format($in,2,",",".")?> realizado</h2>
        <p>O caixa Eletrônico vai te entregar as seguintes notas: </p>
        <ul>
            <li><img src="./Imagens/100reis.jpg" alt="" width="150">X<?=$cem?></li>
            <li><img src="./Imagens/50reais.jpg" alt="" width="150">X<?=$cinquenta?></li>
            <li><img src="./Imagens/10reais.jpg" alt="" width="150">X<?=$dez?></li>
            <li><img src="./Imagens/5reais.jpg" alt="" width="150">X<?=$cinco?></li>
        </ul>
    </section>
</body>
</html>