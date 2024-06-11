<?php
include(conexaor.php);
$snome = $_POST['nome'];
$motivo = $_POST['motivo'];
$turma =$_POST['turma'];
$professor =$_POST['professor'];
$date =$_POST['data'];



$sql = mysqli_query($conexaor, " INSERT INTO motivo(nome,motivo,turma,professor,data)
VALUES ('$snome','$motivo','$turma','$professor','$date')");

if($sql = mysqli_query($conexaor,$sql)){
    
    header('location:registro.php');
}
else{
    echo"deu errado";
}

?>