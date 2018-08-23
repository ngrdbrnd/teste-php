<?php
  $servidor="localhost";//Endereço do servidor
  $usuario="root";//Usuario de acesso ao servidor
  $senha="";//$senha
  $banco="cadastro";//Banco de dados que deseja acessar
  $conexao= new mysqli($servidor,$usuario,$senha,$banco);
  //A linha cima cria a conexão com o banco de dados
  if(mysqli_connect_error()){ // Verifica se a conexão gerou algum erro.
    echo"Erro ao conectar com MySQL;".mysqli_connect_error();
  }


  ?>
