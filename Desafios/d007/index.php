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
        $salario  = $_GET['salario'] ?? 1330;
        $qsalario = intdiv($salario, 1330);
        $salariom = $salario % 1330;
        
    ?>


    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$):</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?=$salario?>">
            <h3>Considerando um salário minimo de 1.330,00</h3>
            <input type="submit" value="Calcular">
        </form>
        
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            echo "Quem recebe um salário de R$ ".number_format($salario, 2,",",".")." ganha <strong>$qsalario salários minimos</strong> + ".number_format($salariom, 0,",",".")."." 
        ?>
    </section>
</body>
</html>