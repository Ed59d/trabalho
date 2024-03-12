<?php
$host="localhost";
$user="root";
$senha="";
$bd="trabalho";

$conexao=  new mysqli($host,$user,$senha,$bd);
if($conexao){
    echo"deu certo";
}
else{
    echo"deu erro".mysqli_connect_error();
}




?>