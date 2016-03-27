
<?php 
include "cabecalho.php";
include "conexao.php";
include "banco_produto.php";

$id = $_POST["id"];

$resultR = remover($conexao, $id);

if($resultR){
	header("location: lista.php?removido=true");
	die();
}else{
	header("location: lista.php");
	die();
}

?>




</div>

</body>
</html>