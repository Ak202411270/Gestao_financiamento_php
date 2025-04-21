<?php
session_start();
include 'galo.php';

if (!isset($_SESSION['usuario_id'])) {
    header("Location: arroz.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Investimento</title>
</head>
<body>

<h2>Cadastrar Novo Investimento</h2>

<form action="processa_investimento.php" method="post">
    <label>Nome do investimento:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Valor (R$):</label><br>
    <input type="number" name="valor" step="0.01" required><br><br>

    <label>Tipo:</label><br>
    <select name="tipo" required>
        <option value="Renda Fixa">Renda Fixa</option>
        <option value="Ações">Ações</option>
        <option value="Fundos">Fundos</option>
        <option value="Criptomoedas">Criptomoedas</option>
    </select><br><br>
    <label>Data da aplicação:</label><br>
  <input type="date" name="data" required><br><br>

    <input type="submit" value="Salvar investimento">
</form>

<p><a href="index.php">Voltar ao painel</a></p>

</body>
</html>
