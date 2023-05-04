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
        $valor1 = $_GET['v1'] ?? 10;
        $valor2 = $_GET['v2'] ?? 10;
        $divint = intdiv($valor1, $valor2);
        $divso  = $valor1 % $valor2;
    ?>
   
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" min="1" value="<?=$valor2?>">
            <input type="submit" value="Dividir">
        </form>
    </main>

    <section id="resultado">
        <table class="divisao">
        <h1>Estrutura da divisão</h1>
        <tr>
            <td><?=$valor1?></td>
            <td><?=$valor2?></td>
        </tr>
        <tr>
            <td><?=$divso?></td>
            <td><?=$divint?></td>
        </tr>
        </table>
    </section>
</body>
</html>
