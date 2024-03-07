<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Chamado Real</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
    }
    .navbar {
      background-color: #007bff;
    }
    .navbar-brand {
      color: #fff;
    }
    .navbar-nav .nav-link {
      color: #fff;
    }
    .card-abrir-chamado {
      padding: 30px 0;
    }
    .card {
      margin: 0 auto;
      max-width: 500px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Adiciona sombra ao cartão */
    }
    .card-header {
      background-color: #007bff;
      color: #fff;
      font-size: 20px; /* Tamanho de fonte maior para o cabeçalho */
      text-align: center; /* Centraliza o texto */
      padding: 20px; /* Aumenta o padding */
    }
    .card-body {
      padding: 20px;
    }
    .form-group label {
      margin-bottom: 5px;
    }
    .btn-warning, .btn-info {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-warning {
      color: #fff;
    }
    .btn-info {
      color: #fff;
    }
    .form-control {
      border-radius: 5px; /* Adiciona bordas arredondadas aos campos de formulário */
    }
 </style>
</head>
<body>
 <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="../logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Chamado Real
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../logoff.php">SAIR</a>
      </li>
    </ul>
 </nav>

 <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 card-abrir-chamado">
        <div class="card">
          <div class="card-header">
            Cadastro de Aluno
          </div>
          <div class="card-body">
            <form method="post" action="registra_aluno.php">
              <div class="form-group">
                <label for="nome">Nome</label>
                <input name="nome" id="nome" type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="matricula">Matrícula</label>
                <input name="matricula" id="matricula" type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="curso">Curso</label>
                <input name="curso" id="curso" type="text" class="form-control" required>
              </div>
              <div class="row mt-5">
                <div class="col-6">
                 <a class="btn btn-warning btn-block" href="home.php">Voltar</a>
                </div>
                <div class="col-6">
                 <button class="btn btn-info btn-block" type="submit">Cadastrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>
</body>
</html>