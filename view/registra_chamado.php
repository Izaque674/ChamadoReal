<?php
// registra_chamado.php
session_start();
require_once "C:/xampp/htdocs/chamadoReal/src/models/User.php";

// O restante do código permanece o mesmo, mas você pode querer otimizar o código CSS e HTML.

	//estamos trabalhando na montagem do texto
	$titulo = str_replace('<br>', '-', $_POST['titulo']);
	$categoria = str_replace('<br>', '-', $_POST['categoria']);
	$descricao = str_replace('<br>', '-', $_POST['descricao']);

	//implode('#', $_POST);

	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;


	//abrindo o arquivo
	$arquivo = fopen('../arquivo.txt', 'a');
	//escrevendo o texto
	fwrite($arquivo, $texto);
	//fechando o arquivo
	fclose($arquivo);

	//echo $texto;
	header('Location: abrir_chamado.php');
?>