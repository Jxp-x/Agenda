<header>
<h3>Cadastro do Contato</h3>
</header>
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
    <div class="alert alert-success" role="alert">"O contato foi adicionado com sucesso!"</div>

</div>

<?php
?>