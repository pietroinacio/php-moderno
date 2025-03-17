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
        <h1>Analisador de Número Real</h1>
        <form action="resposta.php" method="get">
            <label for="num">Número Real:</label>
            <input type="number" name="num" id="idnum" required step="0.001"> 
            <input type="submit" value="Analisar">
        </form>
    </main>
</body>
</html>