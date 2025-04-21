<?php
session_start();
include 'galo.php';
require 'investimento.php';

if(!isset ($_SESSION['usuario_id'])){
header ("Location: arroz.php");
exit;
}

$usuario_id = $_SESSION['usuario_id'];
$nome = $_POST['nome'];
$valor = (float) $_POST['valor'];
$tipo = $_POST['tipo'];
$data = $_POST['data'];

$inv=new Investimento($conexao);
if($inv->cadastrar($usuario_id,$nome,$valor,$tipo,$data)){
header("Location: painel.php");
exit;

}
else{
    header("Location: novo_investimento.php");
}

?>