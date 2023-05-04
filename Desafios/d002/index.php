<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header>
            <h1>Trabalhando com números aleatórios</h1>
        </header>

        
            
            <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);
            echo "<p>Gerando um número aleatório entre $min e $max:</p>";
            echo "<p>O valor gerado foi: $num</p>";
            ?>
            <button onclick="javascript:document.location.reload()">&#x1F504;Gerar número</button>
        
    </main>
</body>
</html>