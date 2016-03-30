<?php

	session_start();
	
	function verificaUsuario(){
		
		if(!usuarioEstaLogado()){
			$_SESSION["danger"] = "usuario nao tem acesso a essa funcionalidade";
			header("location: index.php");
			die();
		}

	}
	
	function logaUsuario($email){
		$_SESSION["usuario_logado"] = $email;
	}
	
	function usuarioEstaLogado(){
		return isset($_SESSION["usuario_logado"]);
	}
	
	function usuarioLogado(){
		return $_SESSION["usuario_logado"];
	}
	
	function desloga(){
		session_destroy();	
		session_start();
	}