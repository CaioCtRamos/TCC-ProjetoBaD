<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Criador De Dossie</title>
        
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">

    </head>
<body>
<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o Dossie</h1>
  <form action="/dossie" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Nome do Aluno:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Aluno">
    </div>
    <div class="form-group">
      <label for="title">Curso:</label>
      <input type="text" class="form-control" id="curso" name="curso" placeholder="Curso do Aluno">
    </div>
    <div class="form-group">
      <label for="title">Turma:</label>
      <input name="turma" id="turma" class="form-control" placeholder="Qual a turma do aluno?">
    </div>
    <div class="form-group">
      <label for="title">Estante:</label>
      <input name="estante" id="estante" class="form-control" placeholder="Qual a estante do aluno?">
    </div>
    <div class="form-group">
      <label for="title">Qual lado esta o aluno?</label>
      <select name="lado" id="lado" class="form-control">
        <option value="A">A</option>
        <option value="B">B</option>
      </select>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>
</body>
</html>