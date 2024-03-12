<?php
include("conexao.php");
$email = $_POST["email"];
$senha = password_hash($_POST["senha"],PASSWORD_DEFAULT);

$resul="INSERT INTO login(email,senha)
VALUE('$email','$senha')";

header('location:login.pgp');

if(mysqli_query($conexao,$resul)){
    echo"usuario cadastrado com sucesso";
}
else{
    echo"nao cadastrado".mysqli_connect_error($conexao);
}

?>