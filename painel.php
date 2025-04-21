<?php
session_start();
include 'galo.php';

if(!isset($_SESSION['usuario_id'])){

    header ("Location:arroz.php");
    exit;
}

$usuario_id=$_SESSION['usuario_id'];
$nome_usuario=$_SESSION['nome'];

$sql="SELECT *FROM investimentos WHERE usuario_id=?";

$stmt=$conexao->prepare($sql);
$stmt->bind_param("i",$usuario_id);
$stmt->execute();
$resultado=$stmt-> get_result();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do usuario</title>
</head>
<body>
    
<h2>Bem vindo,<?php echo htmlspecialchars($nome_usuario);?></h2>
<p><a href ="novo_investimento.php">Cadastrar novo investimento</a> |<a href ="logout.php" >Sair</a></p>
<h3>Seus investimentos</h3>
<?php
if($resultado->num_rows > 0):?>

<table border="1" cellpadding="8">
<tr>
    <th>Nome</th>
    <th>valor</th>
    <th>tipo</th>
    <th>data</th>
</tr>
<?php
while ($row=$resultado->fetch_assoc()):?>
<tr>
    <td><?php echo htmlspecialchars($row['nome']) ?></td>
    <td><?php echo number_format($row['valor'],2,',','.') ?></td>
    <td><?php echo htmlspecialchars($row['tipo']) ?></td>
    <td><?php echo date('d/m/Y', strtotime($row['data'])) ?></td>
</tr>
<?php endwhile;?>


</table>

<?php else:?>
    <p>Você ainda não cadastrou nenhum investimento.</p>
    <?php endif;?>

</body>
</html>