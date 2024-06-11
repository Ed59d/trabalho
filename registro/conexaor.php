<?php 
$bdhost ="localhost";
$bduser="root";
$bdsenha="";
$bdbanco ="registro";

if( $conexao = mysqli_connect($bdhost,$bduser,$bdsenha,$bdbanco)){
    //echo"conectado com sucesso";
} else{
    echo"erro ao se comunicar com a base de dados";
}



?>