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
        $v1 = $_GET['v1'] ?? 0;
        $p1 = $_GET['p1'] ?? 1;
        $v2 = $_GET['v2'] ?? 0;
        $p2 = $_GET['p2'] ?? 1;
    ?>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor:</label>
            <input type="number" name="v1" id="v1" required value="<?=$v1?>">
            <label for="p1">1º Peso:</label>
            <input type="number" name="p1" id="p1" required value="<?=$p1?>">
            <label for="v2">2º Valor:</label>
            <input type="number" name="v2" id="v2" required value="<?=$v2?>">
            <label for="p2">2º Peso:</label>
            <input type="number" name="p2" id="p2" required value="<?=$p2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section id="resultado">
        <?php
            $mediasimp = ($v1 + $v2) / 2;
            $mediapond = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);

            echo "<h2>Calculo das médias</h2>";
            echo "<p>Analisando os valores $v1 e $v2:</p>";
            echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $mediasimp</li>";
            echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $p1 e $p2 é igual a " . number_format($mediapond, 2, ",", ".") . "</li></ul>";
        ?>
    </section>
</body>
</html>