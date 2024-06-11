<?php 
$dbhost="localhost";
$dbusername="root";
$dbsenha="";
$dbname="registro";

if($conexaor = mysqli_connect($dbhost,$dbuser,$dbsenha,$dbname)){
     echo"deu certo";
 }
 else{
     echo"deu erro".mysqli_connect_error();
 }
 
 
 


?>