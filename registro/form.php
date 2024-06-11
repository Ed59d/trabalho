<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ocorrencia</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="coluna">
        <?php 

        include "conexaor.php";
        $nome = $_POST['nome']; 
        $motivo = $_POST['motivo'];
        $data = $_POST['data'];
        $professor = $_POST['professor'];
      
        
        $sql = "INSERT INTO usuario(nome,motivo,data,professor)
        VALUES('$nome','$motivo','$data','$data','$professor')";
        if($sql = mysqli_query($conexao,$sql)){

            echo("$nome ocorrencia feita");
        }
        else{
            echo("ocorrencia negada");
        }
        
        ?>
        <hr>
        <a href="abas.html" class="btn btn-primary">voltar</a>

      </div>

    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>