<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>

    <?php 
        //0x = hexadecimal, 0b = binário, 0 = octal
        // $hexadecimal = 0x1A;
        // echo "O valor da variável é $hexadecimal <br>"; 

        // $v = "Pietro P.<br>";
        // var_dump($v);

        // $num = 3e2; //3 x 10 ^ 2
        // echo "O valor da variável é $num <br>";
        // var_dump($num);

        // $coersao = (string) 15.5; //coerção de tipo
        // echo "O valor da variável é $coersao <br>";
        // var_dump($coersao);

        // $num2 = (int) "350";
        // echo "O valor da variável é $num2 <br>";
        // var_dump($num2);

        // $casado = true;
        // echo "O valor da variável é $casado <br>";  
        // var_dump($casado);

        // $vet = [3, 6.2, 9, "Pietro", 15, false];
        // var_dump($vet);

        class Pessoa{
            private string $nome;
        }

        $p = new Pessoa();
        var_dump($p);
    ?>
</body>
</html>