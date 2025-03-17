<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $real = $_GET['dinheiro'] ?? 0;
            $cotacao = 5.82;
            $dolar = $real / $cotacao;

            $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>

        <p style="font-size: 0.7em; padding-right: 10px"><strong>*Cotação fixa de R$5,82</strong> informada diretamente no código.</p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>