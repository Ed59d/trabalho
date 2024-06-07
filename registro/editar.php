<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php 
    include("conexao2.php");
    $id = $_GET["id"] ?? '';
    $sql2 = "SELECT * FROM ocorrencia2 WHERE id = $id";

    $dados = mysqli_query($conexao2,$sql2);
    $linha = mysqli_fetch_assoc($dados);
    
    
    ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Alteração de dados</h1>
        <form action="editcad.php" method="POST">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" name="nomer"required value="<?php echo $linha['nomer'] ;?>">

            <label for="professorr" class="form-label">professor</label>
            <input type="text" class="form-control" name="professorr" value="<?php echo $linha['professorr'] ;?>">

            <label for="turmar" class="form-label">turma</label>
            <input type="text" class="form-control" name="turmar" value="<?php echo $linha['turmar'] ;?>">

            <label for="motivor" class="form-label">motivo</label>
            <input type="text" class="form-control" name="motivor" value="<?php echo $linha['motivor'] ;?>">

            <label for="datar" class="form-label">data</label>
            <input type="date" class="form-control" name="datar"value="<?php echo $linha['datar'] ;?>">

            <input type="submit" class="btn btn-success" value="salvar alterações">
            <input type="hidden" name="id" value="<?php echo $linha['id'] ;?>">
            

          </div>
      </div>
    </div>
  </div>










  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>