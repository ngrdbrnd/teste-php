<html>
<head>
  <title>Produtos</title>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
</head>
<body>
  <div class="newsletter">
  <h1 class="ft-family newsletter h1 "> Cadastre um produto : </h1>
  <form method="post" action="cadastrar.php">
    <input class="bg-blue-rgba"type="text" name="nome" placeholder="Nome"><br>
    <input class="bg-blue-rgba"type="text" name="descricao" placeholder="Descrição"><br>
    <input class="bg-blue-rgba"type="text" name="preco" placeholder="Preço"><br></div>
    <input class="button bg-blue ft-white" type="submit" value="Cadastrar"><br>
  </form>

  <div class="editor">
  <h1 class="ft-family ed-h1"> Editar ou Remover Produtos Cadastrados : </h1>
  <?php
    include 'conexao.php';
    $sql="SELECT * FROM produtos";
    $resultado=$conexao->query($sql);

    while($row=mysqli_fetch_assoc($resultado)){
      $id=$row['id'];
      $nome=$row['nome'];
      $descricao=$row['descricao'];
      $preco=$row['preco'];

    echo "<span class='editor'>
    <form method=\"post\"action=\"editar.php\">
    ID:<br><input type=\"text\"name=\"id\"value=\"$id\"><br>
    Nome:<br><input type=\"text\"name=\"nome\"value=\"$nome\"><br>
    Descrição:<br><input type=\"text\"name=\"descricao\"value=\"$descricao\"><br>
    Preço:<br><input type=\"text\"name=\"preco\"value=\"$preco\"><br></span>
    <input type=\"submit\" value=\"Editar\">
    </form>
    <form method=\"post\"action=\"deletar.php\">
    <input type=\"hidden\"name=\"id\"value=\"$id\">
    <input type=\"submit\"value=\"Deletar\">
    </form><br>";
  }
  ?>
</div>
</body>
</html>
