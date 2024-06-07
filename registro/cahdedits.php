<?php 
include ("conexao2.php");
$id= $_POST['id'];
$nomer= $_POST['nomerr'];
$profesorr= $_POST['professorrr'];
$turmar= $_POST['turmarr'];
$motivor= $_POST['motivorr'];
$dater= $_POST['datar'];


$sql2 = "UPDATE ocorrencia2 set nomer = '$nomer' , professorr = '$professorr', turmar = '$turmar', motivor = '$motivor', 'datar' = '$datar'
WHERE id = $id";

if ($conexao2=mysqli_query($conexao2, $sql2)){
    echo"alterado com sucesso";
}
else{
    echo"erro ao alterar".mysqli_connect_error($conexao2);
}
?>