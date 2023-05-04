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
    <header>
        <h1>Resultado Final</h1>
    </header>
    <p>
    <?php 
       $numero = $_GET["numero"] ?? 0;
       $numeroN = round($numero);
       $numeroA = $numero + 1;
       $numeroS = $numero - 1;
       echo "O número escolhido: <strong>$numeroN</strong>";
       echo "<br>O seu antecessor: $numeroS";
       echo "<br>O seu sucessor: $numeroA";
    ?>
    </p>
    <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>

    
</body>
</html>