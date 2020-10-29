<header>
   <h3>Contatos</h3>

</header>
<div>
<a href="index.php?menuop=addcont"> Add Contato</a>
</div>
<table border="1">
 <thead>
     <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Idade</th>
        <th>Data de Nasc.</th>
        <th>Email</th>
        <th>Editar</th>
        <th>Deletar</th>

     </tr>
 </thead>
       <tbody>
<?php
$sql = "SELECT * FROM contatos";
$rs = mysqli_query($conexao,$sql) or die("Erro ao concultar a tabela " . mysqli_error($conexao));     
while($dados = mysqli_fetch_assoc($rs)){

?>
       <tr>
           <td><?=$dados["id_contato"] ?></td>
           <td><?=$dados["nome"] ?></td>
           <td><?=$dados["telefone"] ?></td>
           <td><?=$dados["idade"] ?></td>
           <td><?=$dados["datanasc"] ?></td>
           <td><?=$dados["email"] ?></td>
           <td><a href="index.php?menuop=editcont&id_contato=<?=$dados["id_contato"]?>">Editar</a></td>
           <td><a href="index.php?menuop=dletcont&id_contato=<?=$dados["id_contato"]?>">Deletar</a></td>
       </tr>
       <?php
}
?> 
     </tbody>
</table>
