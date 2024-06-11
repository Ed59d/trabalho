<?php
$host="localhost";
$user="root";
$senha="";
$bd="trabalho2";


if($conexao = mysqli_connect($host,$user,$senha,$bd)){
   // echo"deu certo";
}
else{
   // echo"deu erro".mysqli_connect_error();
}




?>