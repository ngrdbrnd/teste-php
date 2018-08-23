<link href="css/style.css" rel="stylesheet" type="text/css"/>
<?php
  include'conexao.php';
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $preco = $_POST['preco'];
  $sql ="INSERT INTO produtos(nome,descricao,preco)VALUES('$nome','$descricao','$preco')";
  
  mysqli_query($conexao,$sql);
  echo"<script>alert('Produto cadastrado com sucesso !')</script>
  <span class='bt-editor'><a href=\"painel.php\">Voltar</a></span>";

?>
