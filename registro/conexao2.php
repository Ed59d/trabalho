<?php 
$host2 = "localhost";
$user2 ="root";
$senha2 ="";
$banco = "trabalho2";

$conexao2 = new mysqli($host2,$user2,$senha2,$banco);
    if (!$conexao2){
    //echo 'deu errado'.mysqli_connect_error();
} 
else{
    //echo 'deu certo ';
}
?>