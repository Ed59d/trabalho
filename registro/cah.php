<?php 
include ("conexao2.php");
$nome = $_POST['nome'];
$professor = $_POST['professor'];
$turma = $_POST['turma'];
$motivo = $_POST['motivo'];
$data = $_POST['data'];



$consulta= "INSERT INTO ocorrencia2(nome, professor, turma, motivo, data)
VALUES('$nome','$professor','$turma''$motivo','$data')";

if ($conexao=mysqli_query($conexao, $consulta)){
    echo"ocorrencia realizada";
}
else{
    echo"ocorrencia falhada".mysqli_connect_error($conexao);
}
?>