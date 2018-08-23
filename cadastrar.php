<link href="css/style.css" rel="stylesheet" type="text/css"/>
<?php
  include'conexao.php';//inclui o arquivo que faz a conexão com o Banco
  $nome = $_POST['nome'];//captura os dados digitados nos campos
  $descricao = $_POST['descricao'];
  $preco = $_POST['preco'];
  $sql ="INSERT INTO produtos(nome,descricao,preco)VALUES('$nome','$descricao','$preco')";
  //insere os dados na tabela "produtos"
  mysqli_query($conexao,$sql);
  echo"<script>alert('Produto cadastrado com sucesso !')</script>
  <span class='bt-editor'><a href=\"painel.php\">Voltar</a></span>";

?>
