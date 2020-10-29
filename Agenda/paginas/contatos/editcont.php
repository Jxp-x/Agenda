<?php
$id_contato = $_GET["id_contato"];

$sql = "SELECT * FROM contatos WHERE id_contato={$id_contato}";
$rs = mysqli_query($conexao,$sql) or die ("Erro ao recuperar os dados do registro." . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
  <h3>Editar Contato</h3>
</header>

<div>
<form action="index.php?menuop=attcont" method="post">

   <div>
     <label for="id_contato">ID</label>
      <input type="text" name="id_contato" value="<?= $dados{"id_contato"}?>">
   </div>
   <div>
     <label for="nome">Nome</label>
      <input type="text" name="nome"value="<?= $dados{"nome"}?>">
   </div>
   <div>
     <label for="telefone">Telefone</label>
      <input type="text" name="telefone"value="<?= $dados{"telefone"}?>">
   </div>
   <div>
     <label for="idade">Idade</label>
      <input type="text" name="idade"value="<?= $dados{"idade"}?>">
   </div>
   <div>
     <label for="datanasc">Data de Nascimento</label>
      <input type="date" name="datanasc"value="<?= $dados{"datanasc"}?>">
   </div>
   <div>
     <label for="email">E-Mail</label>
      <input type="email" name="email"value="<?= $dados{"email"}?>">
   </div>
   <div>
   <input type="submit" value="Atualiza" name="btnAtt">
   </div>


</form>
</div>