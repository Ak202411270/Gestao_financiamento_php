 
<?php

$servidor='127.0.0.1';
$usuario='root';
$senha='';
$bancoDados="feijao";
$conexao=mysqli_connect($servidor,$usuario,$senha,$bancoDados);


if (mysqli_connect_errno()){
echo "problemas para conectar no banco de dados".mysqli_connect_error();
exit;
}
?>


