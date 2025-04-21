<?php
session_start ();
include 'galo.php';

$nome =$_POST['nome'];
$senha=$_POST['senha'];

$sql="SELECT * FROM  usuarios WHERE nome=?";
$stmt=$conexao ->prepare ($sql);
$stmt->bind_param("s",$nome);
$stmt-> execute();
$resultado=$stmt->get_result();
$usuario=$resultado->fetch_assoc();

if ($usuario && password_verify($senha,$usuario['senha'])){
$_SESSION['usuario_id']=$usuario['id'];
$_SESSION['nome']=$usuario['nome'];
header("Location: painel.php");
exit;

}
else{
    echo"Nome ou senha não encontrados";
}

?>