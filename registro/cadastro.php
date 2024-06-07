<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>faça a ocorrencia</h1>
        <form action="cah.php" method="POST">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome do aluno</label>
            <input type="text" class="form-control" name="nome">

            <label for="professor" class="form-label">professor</label>
            <input type="text" class="form-control" name="professor">

            <label for="turma" class="form-label">turma</label>
            <input type="text" class="form-control" name="turma">

            <label for="motivo" class="form-label">motivo</label>
            <input type="text" class="form-control" name="motivo">

            <label for="data" class="form-label">data</label>
            <input type="date" class="form-control" name="data">

            <input type="submit" class="btn btn-success">

          </div>
      </div>
    </div>
  </div>










  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>