<header>
<h3>Atualizar Contato</h3>
</header>
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
    echo "O contato foi atualizado com sucesso!";


?>