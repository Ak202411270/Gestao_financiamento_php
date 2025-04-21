<?php
include 'galo.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    
    $sql_verifica = "SELECT id FROM usuarios WHERE nome = ?";
    $stmt_verifica = $conexao->prepare($sql_verifica);
    $stmt_verifica->bind_param("s", $nome);
    $stmt_verifica->execute();
    $stmt_verifica->store_result();

    if ($stmt_verifica->num_rows > 0) {
        echo "Este nome de usuário já está em uso. Tente outro.";
    } else {
    
        $sql = "INSERT INTO usuarios (nome, senha) VALUES (?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $nome, $senhaHash);
        
        if ($stmt->execute()) {
            echo "Usuário cadastrado com sucesso! <a href='arroz.php'>Fazer login</a>";
        } else {
            echo "Erro ao cadastrar usuário.";
        }
    }
}
?>
