<?php 
include ("conexao2.php");
$id= $_POST['id'];
$nome= $_POST['nome'];
$profesor= $_POST['professor'];
$turma= $_POST['turma'];
$motivo= $_POST['motivo'];
$data= $_POST['data'];


$sql = "UPDATE ocorrencia2 set nome = '$nome' , professor = '$professor', turma = '$turma', motivo = '$motivo', data = '$data'
WHERE id = $id";

if ($conexao=mysqli_query($conexao, $sql)){
    echo"alterado com sucesso";
}
else{
    echo"erro ao alterar".mysqli_connect_error($conexao);
}
?>