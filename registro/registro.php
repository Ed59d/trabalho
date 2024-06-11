<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="stilo.css">
</head>

<body>
  <div class="container">
    <div class="coluna">
      <div class="linha">
  
        <form action="form.php" method="post">
          <div class="mb-3">
          <h1>ocorrencia</h1>
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" name="nome">
            <br>


            <label for="motivo" class="form-label">motivo</label>
            <input type="text" class="form-control" name="motivo">
            <br>
            <label for="turma" class="form-label">turma</label>
            <input type="text" class="form-control" name="turma">
              <br>
              
            <label for="data" class="form-label">Data do ocorrido</label>
            <input type="date" class="form-control" name="data">
            <br>

            <label for="professor" class="form-label">professor</label>
            <input type="text" class="form-control" name="professor">
            <br>

            <input type="submit" class="btn btn-success">


          </div>

        </form>




      </div>

    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>