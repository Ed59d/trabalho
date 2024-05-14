<?php
include("conexao.php");
$nome = $_POST['nome'];
$data =$_POST['data'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);


$sql = mysqli_query($conexao, " INSERT INTO cadastro(nome,data,email,senha)
VALUES ('$nome','$data','$email','$senha')");

if($sql = mysqli_query($conexao,$sql)){
    
    echo "nao encontrado";
}
else{
    header('Location:login.html');
}

?>