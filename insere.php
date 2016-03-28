
<?php 
include "cabecalho.php";
include "conexao.php";
include "banco_produto.php";

 


$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categorias_id"];
$rede = $_POST["id_rede"];



$inseriu = insere($conexao, $nome, $preco, $descricao, $categoria, $rede);

if($inseriu){
	header("location: form.php?inserido=true");
	die();
}else{
	header("location: form.php");
	die();
}


?>



</div>

</body>
</html>