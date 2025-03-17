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
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

        $salarioMinimo = 1518.00;
        $salario = $_GET['salario'] ?? $salarioMinimo;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01" required value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong><?=numfmt_format_currency($padrao, $salarioMinimo, "BRL")?></strong></p>
            <button type="submit">Calcular</button>
        </form>
    </main>
    
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $resultado = (int) ($salario / $salarioMinimo);
            $resto = fmod($salario, $salarioMinimo);

            echo "<p>Quem recebe um salário de ". numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong> " . number_format($resultado, 0, ",", ".") . " salário(s) mínimo(s) + " . numfmt_format_currency($padrao, $resto, "BRL") . "</strong></p>";
        ?>
    </section>
</body>
</html>