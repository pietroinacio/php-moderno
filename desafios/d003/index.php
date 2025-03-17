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
        <form action="resposta.php" method="get">
            <label for="dinheiro">Quantos R$ você tem na carteira?</label>
            <input type="number" name="dinheiro" id="iddinheiro" required step="0.01">
            <input type="submit" value="Converter">
        </form>
    </main>
</body>
</html>