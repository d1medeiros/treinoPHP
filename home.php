
<?php 

	

if(isset($_COOKIE["usuario_logado"])) {
	include "cabecalho.php";
	include "conexao.php";
	include "banco_produto.php";
	
?>
<!--  codigo da pagina aqui aqui -->
<p class="alert-success">Logado com sucesso!</p>

<?php
}else {
?>


<div class="container text-center">
<p class="alert-danger">Usuário ou senha inválida! <a href="index.php">VOLTAR</a></p>

<?php
}
?>


</div>
</body>
</html>