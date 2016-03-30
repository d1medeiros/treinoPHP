<?php
	
	function buscaUsuario($conexao, $nomeUsuario, $email, $senha){
			$md5Senha = md5($senha);
			$query = "SELECT * FROM `usuario` WHERE nome_u= '{$nomeUsuario}' AND email= '{$email}' AND senha='{$md5Senha}' ";
			$result = mysqli_query($conexao, $query);
			$resultBoolean = mysqli_fetch_assoc($result);
			return $resultBoolean;
	}
	
	