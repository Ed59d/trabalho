<?php 
$dbhost="localhost";
$dbusername="root";
$dbsenha="";
$dbname="registro";


$conexao new mysqli($dbhost,$dbusername,$dbsenha,$dbname);

if($conexao ->connect_errno){
    echo"erro";
}else{
    echo"sucesso";
}


?>