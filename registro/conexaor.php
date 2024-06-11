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

function mensagem($texto,$tipo){
    echo"<div class='alert alert-$tipo' role='alert'>
            $texto
    </div>";
}
function mostrar_data($data){
    $d = explode("-",$data);
    $escreve = $d[2]."/".$d[1]."/" .$d[0];
    return $escreve;

}


?>