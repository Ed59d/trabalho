<?php
include("conexao.php");
$nome = $_POST['nome'];
$data =$_POST['data'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);


$sql = mysqli_query($conexao, " INSERT INTO cadastro(nome,data,email,senha)
VALUES ('$nome','$data','$email','$senha')");

if($sql = mysqli_query($conexao,$sql)){
    
    header('Location:login.php');
}
else{
    echo"Não foi encontrado";
}

?>