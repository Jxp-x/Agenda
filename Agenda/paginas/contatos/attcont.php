
<?php 
$id_contato = mysqli_real_escape_string ($conexao,$_POST["id_contato"]);
 $nome = mysqli_real_escape_string ($conexao,$_POST["nome"]);
 $telefone = mysqli_real_escape_string ($conexao,$_POST["telefone"]);
 $idade = mysqli_real_escape_string ($conexao,$_POST["idade"]);
 $datanasc = mysqli_real_escape_string ($conexao,$_POST["datanasc"]);
 $email = mysqli_real_escape_string ($conexao,$_POST["email"]);
 $sql = "UPDATE contatos SET
     nome = '{$nome}',
     telefone = '{$telefone}',
     idade = '{$idade}',
     datanasc = '{$datanasc}',
     email = '{$email}'
     WHERE id_contato = '{$id_contato}'
     ";



    mysqli_query($conexao,$sql) or die ("Erro ao executar a consulta. " . mysqli_error($conexao));
    ?>
<script type="text/javascript">
	alert("Contato Atualizado com Sucesso, aguarde um segundo...");
	window.location="index.php";
</script>
