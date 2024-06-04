<?php
$snome = $_POST['nome'];
$sdata =$_POST['data'];
$motivo = $_POST['motivo'];



$sql = mysqli_query($conexao, " INSERT INTO motivo(nome,data,motivo)
VALUES ('$snome','$sdata','$email')");

if($sql = mysqli_query($conexao,$sql)){
    
}
else{
 
}

?>