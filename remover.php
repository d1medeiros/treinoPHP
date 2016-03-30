
<?php 
include "cabecalho.php";
include "conexao.php";
include "banco_produto.php";
include "logica_usuario.php";

verificaUsuario();


$id = $_POST["id"];

$resultR = remover($conexao, $id);

if($resultR){
	$_SESSION["success"] = "removido com sucesso!";
	header("location: lista.php");
	die();
}else{
	$_SESSION["danger"] = "NAO foi removido com sucesso!";
	header("location: lista.php");
	die();
}

?>




</div>

</body>
</html>