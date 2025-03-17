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
        $valor = $_GET['valor'] ?? 1;
    ?>
    <main>
    <h2>Caixa Eletrônico</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="valor" id="valor" required value="<?=$valor?>">
            <p style="font-size: 0.6em;">Notas disponíveis: R$100, R$50, R$20, R$10, R$5, R$2, R$1</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section id="resultado">
        <?php 
            $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

            $sobra = $valor;

            $v100 = intdiv($sobra, 100);
            $sobra = $sobra % 100;

            $v50 = intdiv($sobra, 50);
            $sobra = $sobra % 50;

            $v20 = intdiv($sobra, 20);
            $sobra = $sobra % 20;

            $v10 = intdiv($sobra, 10);
            $sobra = $sobra % 10;

            $v5 = intdiv($sobra, 5);
            $sobra = $sobra % 5;

            $v2 = intdiv($sobra, 2);
            $sobra = $sobra % 2;

            $v1 = $sobra;

            echo "<h2>Saque de " . numfmt_format_currency($padrao, $valor, "BRL") . " realizado</h2>";
            echo "<p>O caixa eletrônico vai te entragar as seguintes notas:</p>"
        ?>
   
    <img src="imagens/100-reais.jpg" width="250px" alt="Nota de R$100,00">x <?=$v100?> <br>
    <img src="imagens/50-reais.jpg" width="250px" alt="Nota de R$50,00">x <?=$v50?> <br>
    <img src="imagens/20-reais.jpg" width="250px" alt="Nota de R$20,00">x <?=$v20?> <br>
    <img src="imagens/10-reais.jpg" width="250px" alt="Nota de R$10,00">x <?=$v10?> <br>
    <img src="imagens/5-reais.jpg" width="250px" alt="Nota de R$5,00">x <?=$v5?> <br>
    <img src="imagens/2-reais.jpg" width="250px" alt="Nota de R$2,00">x <?=$v2?> <br>
    <img src="imagens/1-real.jpg" width="100px" alt="Nota de R$1,00">x <?=$v1?> <br>
    </section>
</body>
</html>