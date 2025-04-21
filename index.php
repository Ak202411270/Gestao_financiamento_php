<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="processa_cadastro.php" method="post">
        <label for="nome">Nome de usuário:</label><br>
        <input type="text" name="nome" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
    <p><a href="arroz.php">Já tem conta? Faça login</a></p>
</body>
</html>
