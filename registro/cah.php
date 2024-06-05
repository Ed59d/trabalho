<?php 
include ("conexao.php");
$nome= $_POST['nome'];
$motivo= $_POST['motivo'];
$data= $_POST['data'];



$consulta= "INSERT INTO usuario(nome, motivo, data)
VALUES('$nome','$motivo','$data')";

if ($conexao=mysqli_query($conexao, $consulta)){
    echo"ocorrencia realizada";
}
else{
    echo"ocorrencia falhada".mysqli_connect_error($conexao);
}
?>