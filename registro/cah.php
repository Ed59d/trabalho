<?php 
include ("conexao2.php");
$nomer = $_POST['nomer'];
$professorr = $_POST['professorr'];
$turmar = $_POST['turmar'];
$motivor = $_POST['motivor'];
$datar = $_POST['datar'];



$consulta= "INSERT INTO ocorrencia2(nomer, professorr, turmar, motivor, datar)
VALUES('$nomer','$professorr','$turmar''$motivor','$datar')";

if ($conexao=mysqli_query($conexao2, $consulta)){
    echo"ocorrencia realizada";
}
else{
    echo"ocorrencia falhada".mysqli_connect_error($conexao2);
}
?>