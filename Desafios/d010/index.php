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
        $a = date('Y');
        $nas = $_GET['nas'] ?? 0;
        $ano = $_GET['ano'] ?? $a;
        $idade = $ano - $nas;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nas">Em que ano você nasceu?</label>
            <input type="number" name="nas" id="nas" value="<?=$nas?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em {})</label>
            <input type="number" name="ano" id="ano" value="<?=$a?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <p>Quem nasceu em <?=$nas?> va ter <strong><?=$idade?> anos</strong> em <?=$ano?></p>
    </section>
</body>
</html>