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
        <h1>Resultado Final</h1>
        <?php 
            $num = $_GET["numero"] ?? 0;
            $antecessor = $num - 1;
            $sucessor = $num + 1;

            echo "<p>O número escolhido foi <strong>$num</strong></p>";
            echo "<p>O seu antecessor é $antecessor</p>";
            echo "<p>O seu sucessor é $sucessor</p>";
        ?>
        <button onclick="javascrip:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>