<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <body>
  <div class="conteiner">
    <div class="row">
      <div class="col">
        <h1>Pesquisar</h1>
     <nav class="navbar bg-body-tertiary">
         <div class="container-fluid">
            <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="busca">
                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
        </nav> 
        </div> 
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome completo</th>
      <th scope="col">Nascimento</th>
      <th scope="col">E-mail</th>
      <th scope="col">Senha</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
       
      </div>
    </div>
  </div>
























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>