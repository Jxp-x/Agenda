<style>   
  .container {
          width: 100vw;
      height: 100vh;
         display: flex;
        flex-direction: row;
        justify-content: center;
         align-items: center
    }
    .box {
        width: 300px;
        height: 300px;
    }
 </style>

<?php
$id_contato = $_GET["id_contato"];

$sql = "SELECT * FROM contatos WHERE id_contato={$id_contato}";
$rs = mysqli_query($conexao,$sql) or die ("Erro ao recuperar os dados do registro." . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
</header>
<div class="container">
<div class="box">
<form action="index.php?menuop=attcont" class="form-cad" method="post">
<h1 class="h3 mb-3 font-weight-normal=">Atualizar Contato</h1>
<input type="text" name="id_contato"class="form-control" placeholder="E-mail" maxlength="40"value="<?= $dados{"id_contato"}?>" required >
<input type="text" name="nome" class="form-control"  placeholder="Nome completo" maxlength="30" value="<?= $dados{"nome"}?>" required autofocus>
<input type="email" name="email"class="form-control" placeholder="E-mail" maxlength="40"value="<?= $dados{"email"}?>" required >
<input type="text" name="telefone"class="form-control" placeholder="Telefone" maxlength="40" required value="<?= $dados{"telefone"}?>">
<input type="text" name="idade"class="form-control" placeholder="Idade" maxlength="40" value="<?= $dados{"idade"}?>"required >
<input type="date" name="datanasc"class="form-control" placeholder="Data de Nascimento"value="<?= $dados{"datanasc"}?>" maxlength="40" required >
<button class="btn btn-lg btn-primary btn-block" type="submit" value="Atualiza">Adicionar</button>  


</form>
</div>