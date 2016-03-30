
<?php 
include "cabecalho.php"; 
include "conexao.php";
include "banco_categorias.php";
include "logica_usuario.php";

$categorias = buscaCategorias($conexao);
$redes = buscaRede($conexao);


verificaUsuario();

?>

<?php if(isset($_SESSION["success"])){ ?>
	<p class="alert-success"> <?= $_SESSION["success"] ?> </p>
<?php } unset($_SESSION["success"]); ?>

<?php if(isset($_SESSION["danger"])){ ?>
	<p class="alert-danger"> <?= $_SESSION["danger"] ?> </p>
<?php } unset($_SESSION["danger"]); ?>



<form action="insere.php" method="POST">
	<table class="table">
		<tr>
			<td>Nome:</td>
			<td><input class="form-control" type="text" name="nome" /></td>
		</tr>
		<tr>
			<td>Preço:</td>
			<td><input class="form-control" type="number" name="preco" /></td>
		</tr>
		<tr>
			<td>Categorias</td>
			<td>
				<?php foreach ($categorias as $categoria) : ?>
					<input type="radio" name="categorias_id" value="<?= $categoria['id_c'] ?>">
						<?= $categoria['nome_c'] ?><br />
					</input>
				<?php endforeach ?>
			</td>
		</tr>
		<tr>
			<td>Rede</td>
			<td>
				<select name="id_rede" class="form-control">
					<?php foreach ($redes as $rede) : ?>
					<option value="<?= $rede['id_r']?>"><?= $rede['nome_r'] ?></option>
					<?php endforeach ?>
				</select>
			</td>	
		</tr>
		<tr>
			<td>Descrição:</td>
			<td><textarea class="form-control" name="descricao"></textarea></td>
		</tr>
		<tr>
			<td><button class="form-control" type="submit"> send </button></td>
		</tr>
	</table>
</form>



</div>

</body>
</html>