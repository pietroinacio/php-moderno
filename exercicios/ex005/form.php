<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <form action="superglobais.php?aluno=Pedrinho&turno=Noite" method="post">
            <label for="usu">Usuário:</label>
            <input type="text" name="usu" id="usu">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>