<?php
session_start();
if(!isset($_SESSION['usuario_id'])){
header("location:arroz.php");
exit;

}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area do usuario</title>
</head>
<body>
   <h2>Bem vindo ao seu investimento <?php echo $_SESSION['nome'];?>!</h2> 
<p>Você está logado com sucesso.</p>
<a href="logout.php">Sair</a>
</body>
</html>