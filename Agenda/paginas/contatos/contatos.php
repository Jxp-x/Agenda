<style>   
.container {
         display: flex;
        flex-direction: row;
        justify-content: center;
         align-items: center
    }
    </style>   
<header>
</header>

<div class="container">
<table class="table table-bordered table-striped table-hover">
 <thead>
     <tr>
        <th scope>ID</th>
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
           <th scope="row"><?=$dados["id_contato"] ?></td>
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
</div>
