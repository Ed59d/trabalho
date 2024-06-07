<?php 
$dbhost="localhost";
$dbusername="root";
$dbsenha="";
$dbname="registro";


$conexao_ new mysqli($dbhost,$dbusername,$dbsenha,$dbname);

if($conexao_ ->connect_errno){
    echo"erro";
}else{
    echo"sucesso";
}


?>