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
        $n = $_GET['number'] ?? 25;
        $raizq = sqrt($n);
        $raizc = $n ** (1/3);
    ?>

    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="number">Número</label>
        <input type="number" name="number" id="idnumber" value="<?=$n?>">
        <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section id="resultado">
        <h1>Resultado Final</h1>
        <h3>Analizando o número <?=$n?> temos:</h3>
        <?php 
            echo "<ul>
                    <li>O resultado da raiz quadrada de $n é ".number_format($raizq, 3,",",".")."</li>
                    <li>O resultado da raiz cúbica de $n é ".number_format($raizc, 3,",",".")."</li>
                  </ul>"        
        ?>

    </section>
</body>
</html> 