<?php
session_start();
include 'galo.php';

if (!isset($_SESSION['usuario_id'])) {
    header("Location: arroz.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_id = $_SESSION['usuario_id'];
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $tipo = $_POST['tipo'];
    $data = date('Y-m-d'); 

    $sql = "INSERT INTO investimentos (usuario_id, nome, valor, tipo, data) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("isdss", $usuario_id, $nome, $valor, $tipo, $data);

    if ($stmt->execute()) {
        header("Location: painel.php"); 
        exit;
    } else {
        echo "Erro ao cadastrar investimento.";
    }
} else {
    echo "Requisição inválida.";
}
