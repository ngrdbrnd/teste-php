<link href="css/style.css" rel="stylesheet" type="text/css"/>
<?php
include 'conexao.php';
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $preco = $_POST['preco'];

  $query = "UPDATE produtos SET nome='$nome',descricao='$descricao',preco='$preco'WHERE id='$id'";
  mysqli_query($conexao,$query);

  echo"<script>alert('Produto editado com sucesso !')</script>
  <span class='bt-editor'><a href=\"painel.php\">Voltar</a></span>";
  /*se der certo, aparecer esta msg*/
//  UPDATE - atualiza a tabela 'produtos' SET - substitui o conteúdo WHERE id - define que os dados atualizados , são referentes ao id armazenado na $id.
?>
