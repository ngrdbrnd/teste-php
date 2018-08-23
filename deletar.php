<link href="css/style.css" rel="stylesheet" type="text/css"/>
<?php
  include'conexao.php';
  $id = $_POST['id'];

  $query ="DELETE FROM produtos WHERE id='$id'";
  mysqli_query($conexao,$query);

  echo"<script>alert('Produto removido com sucesso !')</script>
  <span class='bt-editor'><a href=\"painel.php\">Voltar</a></span>";
  ?>
