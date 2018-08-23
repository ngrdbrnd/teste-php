<link href="css/style.css" rel="stylesheet" type="text/css"/>
<?php
  include'conexao.php';
  $id = $_POST['id'];

  $query ="DELETE FROM produtos WHERE id='$id'";// DELETE FROM produtos - deleta o registro da tabela produtos.
  mysqli_query($conexao,$query);// WHERE id = '$id' - Define quais dados serão removidos , de acordo com o id armazenado na variável $id.

  echo"<script>alert('Produto removido com sucesso !')</script>
  <span class='bt-editor'><a href=\"painel.php\">Voltar</a></span>";
  ?>
