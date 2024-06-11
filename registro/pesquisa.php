<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>pesquisar</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <?php
  $pesquisa = $_POST['busca'] ?? '';

  include "conexaor.php";

  $sql = "SELECT * FROM ocorrencia where nome LIKE '%$pesquisa%' ";
  $dados = mysqli_query($conexao, $sql);
  ?>


  <div class="container">
    <div class="row">
      <div class="col">
        <h1>pesquisar</h1>
        <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
            <form class="d-flex" role="search" action="pesquisa.php" method="POST">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="busca">
              <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
          </div>
        </nav>
        <table class="table table-hover">
          <thead>
            <tr>

              <th scope="col">Nome</th>
              <th scope="col">motivo</th>
              <th scope="col">Data data do ocorrido</th>
              <th scope="col">professor</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
            while ($linha = mysqli_fetch_assoc($dados)) {
              $id = $linha['id'];
              $nome = $linha['nome'];
              $endereco = $linha['motivo'];
              $telefone = $linha['data'];
              $data = $linha['professor'];

              echo "<tr>
          
          <td>$nome</td>
          <td>$motivo</td>
          <td>$data</td>
          <td>$professor</td>
          <td width=150px>
          <a href='cadastro_edit.php? id=$id' class='btn btn-success btn-sm'>Editar</a>
          <a href='#' class=' btn btn-danger btn-sm'data-toggle='modal' data-target='#confirma'
          onclick=" .'"' ."pegar_dados($id,'$nome')" . '"' .">Excluir</a>
          </td> 
        </tr>";
            }
            ?>
          </tbody>
        </table>
            <!--  onclic="pegar_dados(i-d,nome)"-->

        <a href="abas.html" class=" btn btn-info">Voltar para o Inicio</a>
     

  
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>