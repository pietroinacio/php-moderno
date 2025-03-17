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
        $num = $_GET['num'] ?? 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número:</label>
            <input type="number" name="num" id="num" required value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $raiz = sqrt($num);
            $raizcub = $num ** (1/3);
            echo "<p>Analisando o número <strong>$num</strong>, temos:</p>";
            echo "<ul><li>A sua raiz quadrada é " . number_format($raiz, 3, ",", '.') . "</li>";
            echo "<li>A sua raiz cúbica é " . number_format($raizcub, 3, ",", ".") . "</li></ul>";
        ?>
    </section>
</body>
</html>