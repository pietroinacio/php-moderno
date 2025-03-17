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
        $nasc = $_GET['nasc'] ?? date('Y');
        $ano = $_GET['ano'] ?? date('Y');
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" required value="<?=$nasc?>" min="1900" max="<?=date('Y') - 1?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=date('Y')?></strong>)</label>
            <input type="number" name="ano" id="ano" required value="<?=$ano?>" min="<?=$nasc + 1?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $nasc;

            if ($idade == 1){
                echo "<p>Quem nasceu em $nasc vai ter <strong>$idade ano</strong> em $ano!</p>";
            }else{
                echo "<p>Quem nasceu em $nasc vai ter <strong>$idade anos</strong> em $ano!</p>";
            }
        ?>
    </section>
</body>
</html>