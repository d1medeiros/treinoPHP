<?php
	include "conexao.php";
	include "banco-usuario.php";
	
	
	$nomeUsuario = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$usuario = buscaUsuario($conexao, $nomeUsuario, $email, $senha);
	
	if($usuario == null){
		header("location: home.php?login=0");
	}else{
		header("location: home.php?login=1");
	}
	
	
	
	
	?>
	
