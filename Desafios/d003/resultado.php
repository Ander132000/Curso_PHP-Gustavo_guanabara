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
            <h1>Conversor de Moedas v1.0</h1>
        </header>
        <?php 
            $number = $_GET["number"] ?? 0;
            $cotacao;
            $dolar = $number / $cotacao;
            $padrão = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            echo "<p>Seus ".numfmt_format_currency($padrão,$number,"BRL")." equivalem a <strong>".numfmt_format_currency($padrão,$dolar,"USD")."</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">VOLTAR</button>
    </main>
</body>
</html>