<?php
require_once "C:/xampp/htdocs/chamadoReal/src/models/Aluno.php";
error_reporting(0);

//chamados
$alunos = array();

//abrir o arquivo.hd
$arquivo = fopen('../registro_aluno.txt', 'r');

//enquanto houver registros (linhas) a serem recuperados
while(!feof($arquivo)) { //testa pelo fim de um arquivo
  //linhas  
  $registro = fgets($arquivo);
  $alunos[] = $registro;
}

//fechar o arquivo aberto
fclose($arquivo);

// O restante do código permanece o mesmo, mas você pode querer otimizar o código CSS e HTML.
?>

<!-- O conteúdo do arquivo consultar_chamado.php permanece o mesmo, mas você pode querer otimizar o código CSS e HTML. -->
<html>
  <head>
    <meta charset="utf-8" />
    <title>Chamado Real</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
 body {
    font-family: 'Arial', sans-serif;
    background-color: #f9f9f9; /* Fundo claro para melhor contraste */
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
 .card-consultar-chamado {
    padding: 30px 0;
    width: 100%;
    margin: 0 auto;
    text-align: center; /* Centraliza o conteúdo */
 }
 .card {
    margin: 0 auto;
    max-width: 500px; /* Limita a largura para melhor responsividade */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); /* Adiciona sombra */
    transition: 0.3s; /* Transição suave para interações */
 }
 .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2); /* Aumenta a sombra ao passar o mouse */
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
 .btn-primary, .btn-danger {
    margin-top: 10px; /* Adiciona espaçamento entre os botões */
 }
 /* Responsividade */
 @media (max-width: 768px) {
    .card {
      max-width: 90%; /* Reduz a largura em telas menores */
    }
 }
</style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="../logo.png" width="30" height="30" href="../view/home.php" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consultar Aluno
            </div>
            
            <div class="card-body">

              <?php foreach($alunos as $aluno) { ?>
              
                <?php

                  $aluno_dados = explode('#', $aluno);

                  //
                  if($_SESSION['profile_id'] == 2) {
                    //só vamos exibir o chamado, se ele foi criado pelo usuário
                    if($_SESSION['id'] != $aluno_dados[0]) {
                      continue;
                    }
                  }

                  if(count($aluno_dados) < 3) {
                    continue;
                  }

                ?>
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?=$aluno_dados[1]?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$aluno_dados[2]?></h6>
                    <p class="card-text"><?=$aluno_dados[3]?></p>
                    <a href="editar_aluno.php?id=<?=$aluno_dados[0]?>" class="btn btn-primary">Editar</a>
                    <a href="excluir_aluno.php?matricula=<?=htmlspecialchars($aluno_dados[0], ENT_QUOTES)?>" class="btn btn-danger">Excluir</a>

                  </div>
                </div>

              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>