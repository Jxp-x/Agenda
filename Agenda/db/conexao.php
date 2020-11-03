<?php
  include("config.php");

  $conexao = mysqli_connect(SERVIDOR,USER,PASS,BANCO) or die("Erro de conexão com o servidor " . mysqli_connect_error());

?>