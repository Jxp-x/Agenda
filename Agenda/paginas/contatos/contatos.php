
<div class="container">
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover">

 <thead>
     <tr>
        <th scope>Nome</th>
        <th scope>Telefone</th>
        <th scope>Idade</th>
        <th scope>Data de Nasc.</th>
        <th scope>Email</th>
        <th scope>Editar</th>
        <th scope>Deletar</th>
     </tr>
 </thead>
       <tbody>
<?php
$txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";


$sql = "SELECT * FROM contatos
 WHERE 
 id_contato='{$txt_pesquisa}' or
 nome LIKE '%{$txt_pesquisa}%'
 ORDER BY nome ASC
 ";


$rs = mysqli_query($conexao,$sql) or die("Erro ao concultar a tabela " . mysqli_error($conexao));     
while($dados = mysqli_fetch_assoc($rs)){

?>
       <tr>
           
           <th scope="row"><?=$dados["nome"] ?></td>
           <td><?=$dados["telefone"] ?></td>
           <td><?=$dados["idade"] ?></td>
           <td><?=$dados["datanasc"] ?></td>
           <td><?=$dados["email"] ?></td>
           <td><a href="index.php?menuop=editcont&id_contato=<?=$dados["id_contato"]?>"><button class="btn btn-primary my-2 my-sm-0">Editar</button></a></td>
           <td><a href="index.php?menuop=dletcont&id_contato=<?=$dados["id_contato"]?>"><button class="btn btn-danger my-2 my-sm-0">Deletar</button></a></td>
       </tr>
       <?php
}
?> 
     </tbody>
</table>
</div>
</div></div>

