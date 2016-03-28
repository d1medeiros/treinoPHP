<?php 
	
	function buscaCategorias ($conexao){
		$categorias = array();
		$query = "select * from categorias";
		$resultado = mysqli_query($conexao, $query);
		while($categoria = mysqli_fetch_assoc($resultado)){
			array_push($categorias, $categoria);
		}
		return $categorias;
	}

	function buscaRede ($conexao){
		$redes = array();
		$query = "select * from rede";
		$resultado = mysqli_query($conexao, $query);
		while($rede = mysqli_fetch_assoc($resultado)){
			array_push($redes, $rede);
		}
		return $redes;
	}