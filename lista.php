
<?php 
include "cabecalho.php";
include "conexao.php";
include "banco_produto.php";


$produtos = array();
$result = buscaProdutos($conexao);
while($produto = mysqli_fetch_assoc($result)){
	array_push($produtos, $produto);
}
 ?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido'] ==true){ ?>
	<p class="alert-success"> removido com sucesso!</p>
<?php } ?>

<table class="table table-striped table-bordered">
	<?php foreach ($produtos as $p) { ?>

	<tr>
		<td><?= $p['vnome'] ?></td>
		<td><?= $p['preco'] ?></td>
		<td><?= substr($p['descricao'] , 0, 25) ?></td>
		<td><?= $p['cnome'] ?></td>
		<td><?= $p['rnome']?></td>
		<td>
			<form action="remover.php" method="POST">
				<input type="hidden" name="id" value="<?= $p['id'] ?>" />
				<button class="btn btn-danger">Remover</button>
			</form>
		</td>
	</tr>
	<?php } ?>
</table>




</div>

</body>
</html>