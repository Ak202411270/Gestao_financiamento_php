<?php
class investimento {
private $conexao;
public function  __construct ($conexao){
   $this->conexao = $conexao;
}
public function cadastrar ($usuario_id,$nome,$valor,$tipo,$data){
$sql="INSERT INTO investimentos(usuario_id,nome,valor,tipo,data)
VALUES(?,?,?,?,?)";
$stmt=$this ->conexao ->prepare($sql);
$stmt->bind_param("isdss",$usuario_id,$nome,$valor,$tipo,$data);
return $stmt->execute();
}

}

?>