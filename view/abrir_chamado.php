<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>App Help Desk</title>
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
      background-color: #f8f9fa;
      border-radius: 5px;
    }
    .card {
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-secondary {
      background-color: #6c757d;
      border-color: #6c757d;
    }
    .form-control {
      border-radius: 5px;
    }
 </style>
</head>
<body>
 <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="../view/home.php">
      <img src="../logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../logoff.php">SAIR</a>
      </li>
    </ul>
 </nav>

 <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-6 card-abrir-chamado">
        <div class="card">
          <div class="card-header">
            Abertura de chamado
          </div>
          <div class="card-body">
            <form method="post" action="registra_chamado.php">
              <div class="form-group">
                <label for="titulo">Título</label>
                <input name="titulo" id="titulo" type="text" class="form-control" placeholder="Título" required>
              </div>
              <div class="form-group">
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria" class="form-control" required>
                 <option value="">Selecione...</option>
                 <option value="Criação Usuário">Criação Usuário</option>
                 <option value="Impressora">Impressora</option>
                 <option value="Hardware">Hardware</option>
                 <option value="Software">Software</option>
                 <option value="Rede">Rede</option>
                </select>
              </div>
              <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" rows="3" required></textarea>
              </div>
              <div class="row mt-4">
                <div class="col">
                 <a class="btn btn-secondary btn-block" href="home.php">Voltar</a>
                </div>
                <div class="col">
                 <button class="btn btn-primary btn-block" type="submit">Abrir</button>
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