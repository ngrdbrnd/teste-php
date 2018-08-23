<?php
  $servidor="localhost";
  $usuario="root";
  $senha="";
  $banco="cadastro";
  $conexao= new mysqli($servidor,$usuario,$senha,$banco);
 
  if(mysqli_connect_error()){ 
    echo"Erro ao conectar com MySQL;".mysqli_connect_error();
  }


  ?>
