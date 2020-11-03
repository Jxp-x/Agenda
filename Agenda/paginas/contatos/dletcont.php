
<?php
 $id_contato = mysqli_real_escape_string($conexao,$_GET["id_contato"]);
 $sql = "DELETE FROM contatos WHERE id_contato = '{$id_contato}'";

 mysqli_query($conexao,$sql) or die ("Erro ao excluir o registro " . mysqli_error($conexao));
?>
<script type="text/javascript">
	alert("Contato Deletado com Sucesso, aguarde um segundo...");
	window.location="index.php";
</script>