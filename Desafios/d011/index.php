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
        $preco = $_GET['preco']??0;
        $per = $_GET['per']??0;
        $valor = $preco * $per / 100;
        $valor_aumento = $preco + $valor;
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço de Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0.01" min="0.10" value="<?=$preco?>">
            <label for="per">Qual será o percentual de reajuste? (<strong><span id="p">0</span>%</strong>)</label>
            <input type="range" name="per" id="per" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$per?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h1>Resultado do Reajuste</h1>
        <p>O produto que custava R$<?=Number_format($preco, 2,",",".")?> com <strong><?=$per?>% de aumento</strong> vai passar a custar <strong>R$<?=Number_format($valor_aumento, 2,",",".")?></strong> a partir de agora</p>
    </section>

    <script>
        mudaValor()
        
        function mudaValor(){
            p.innerText = per.value
        }
    </script>
</body>
</html>