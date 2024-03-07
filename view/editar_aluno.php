<?php
// Recupera o ID do aluno a ser editado
$id = $_GET['id'];

// Inicia a busca pelo aluno pelo ID
$aluno_edit = false;
$handle = fopen('../registro_aluno.txt', 'r');

if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $linha_dados = explode('#', $line);
        if ($linha_dados[0] == $id) {
            $aluno_edit = $line;
            break;
        }
    }
    fclose($handle);
}

// Exibe o formulário de edição com os dados do aluno
if ($aluno_edit) {
    $aluno_dados = explode('#', $aluno_edit);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Editar Aluno</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mt-5">
          <div class="card-header">
            Editar Aluno
          </div>
          <div class="card-body">
            <form method="post" action="salvar_edicao_aluno.php">
              <input type="hidden" name="id" value="<?= $aluno_dados[0] ?>">
              <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="<?= $aluno_dados[1] ?>" required>
              </div>
              <div class="form-group">
                <label for="curso">Curso</label>
                <input type="text" name="curso" id="curso" class="form-control" value="<?= $aluno_dados[2] ?>" required>
              </div>
              <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>
</body>
</html>

<?php
} else {
    echo "Aluno não encontrado.";
}
?>