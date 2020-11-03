
<?php 

 $nome = mysqli_real_escape_string ($conexao,$_POST["nome"]);
 $telefone = mysqli_real_escape_string ($conexao,$_POST["telefone"]);
 $idade = mysqli_real_escape_string ($conexao,$_POST["idade"]);
 $datanasc = mysqli_real_escape_string ($conexao,$_POST["datanasc"]);
 $email = mysqli_real_escape_string ($conexao,$_POST["email"]);
 $sql = "INSERT INTO contatos (
     nome,
     telefone,
     idade,
     datanasc,
     email)
     VALUES(
         '{$nome}',
         '{$telefone}',
         '{$idade}',
         '{$datanasc}',
         '{$email}'
     
     )
     ";
    mysqli_query($conexao,$sql) or die ("Erro ao executar a consulta. " . mysqli_error($conexao));
    ?>
 <script type="text/javascript">
	alert("Contato Cadastrado com Sucesso, aguarde um segundo...");
	window.location="index.php";
</script>
    
</div>