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

        <?php 
            $num = $_GET['num'] ?? 0;
            $inteiro = (int) $num;
            $real = $num - $inteiro;
            echo "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuário:</p>";
            echo "<ul><li><p>O valor inteiro é <strong>" . number_format($inteiro, 0, ",", ".") . "</strong></p></li>";
            echo "<li><p>O valor real é <strong>" . number_format($real, 3, ",", ".") . "</strong></p></li></ul>";
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>