<?php
	include "conexao.php";
	include "banco-usuario.php";
	include "logica_usuario.php";
	
	
	
	$nomeUsuario = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$usuario = buscaUsuario($conexao, $nomeUsuario, $email, $senha);
	
	if($usuario == null){
		$_SESSION["danger"] = "senha ou login incorreto";
		header("location: index.php");
	}else{
		$_SESSION["success"] = "login efetuado";
		logaUsuario($email);
		header("location: index.php");
	}
	
	die();
	
	
	?>
	
