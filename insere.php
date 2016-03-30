
<?php 
include "cabecalho.php";
include "conexao.php";
include "banco_produto.php";
include "logica_usuario.php";
 
verificaUsuario();

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categorias_id"];
$rede = $_POST["id_rede"];



$inseriu = insere($conexao, $nome, $preco, $descricao, $categoria, $rede);

if($inseriu){
	$_SESSION["success"] = "inserido com sucesso!";
	header("location: form.php");
	die();
}else{
	$_SESSION["danger"] = "nao foi inserido com sucesso!";
	header("location: form.php");
	die();
}


?>



</div>

</body>
</html>