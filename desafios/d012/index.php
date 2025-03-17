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
        $seg = $_GET['seg'] ?? 0;
    ?>

    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" required value="<?=$seg?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <?php 
            $sobra = $seg;
    
            $semanas = intdiv($sobra, 604800);
            $sobra = $sobra % 604800;
            
            $dias = intdiv($sobra, 86400);
            $sobra = $sobra % 86400;
            
            $horas = intdiv($sobra, 3600);
            $sobra = $sobra % 3600;
            
            $minutos = intdiv($sobra, 60);
            $sobra = $sobra % 60;
            
            $segundos = $sobra;

            echo "<p>Analisando o valor que você digitou, <strong>".number_format($seg, 0, ",", '.')."</strong> segundos equivalem a um total de:</p>";
            echo "<ul><li>".number_format($semanas, 0) ." semanas</li>";
            echo "<li>". number_format($dias, 0) ." dias</li>";
            echo "<li>". number_format($horas, 0) ." horas</li>";
            echo "<li>". number_format($minutos, 0) ." minutos</li>";
            echo "<li>". number_format($segundos, 0) ." segundos</li></ul>"
        ?>
    </section>
</body>
</html>