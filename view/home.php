<?php
// home.php
require_once "C:/xampp/htdocs/chamadoReal/src/models/User.php";
?>

<!-- O conteúdo do arquivo home.php permanece o mesmo, mas você pode querer otimizar o código CSS e HTML. -->
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

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
 .card-home {
    padding: 30px 0;
    width: 100%;
    margin: 0 auto;
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
 /* Responsividade */
 @media screen and (max-width: 768px) {
    .card {
      max-width: 90%; /* Reduz a largura em telas menores */
    }
 }
</style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="../logo.png" width="30" height="30" href="home.php" class="d-inline-block align-top" alt="">
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

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                    <img src="../formulario_abrir_chamado.png" width="70" height="70">
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <img src="../formulario_consultar_chamado.png" width="70" height="70">
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="cadastrar_aluno.php">
                    <img src="../aluno.png" width="70" height="70">
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="aluno.php">
                    <img src="../aluna.png" width="70" height="70">
                  </a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>