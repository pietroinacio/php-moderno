<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 1;
        $porcentagem = $_GET['porcentagem'] ?? 50;
    ?>

    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" required step="0.01" value="<?=$preco?>">

            <label for="porcentagem">Qual será o percentual de reajuste? <strong>(<span id="p"></span>%)</strong></label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1" value="<?=$porcentagem?>" oninput="mudaValor()">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <?php 
            $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

            $reajuste = $preco * $porcentagem / 100;
            $novoPreco = $preco + $reajuste;

            echo "<p>O produto que custava " . numfmt_format_currency($padrao, $preco, "BRL") . ", com <strong>$porcentagem%</strong> de aumento vai passar a custar <strong>" . numfmt_format_currency($padrao, $novoPreco, "BRL") . "</strong> a partir de agora.</p>"
        ?>
    </section>

    <script>
        mudaValor();

        function mudaValor(){
            p.innerText = porcentagem.value;   
        }
    </script>
</body>
</html>