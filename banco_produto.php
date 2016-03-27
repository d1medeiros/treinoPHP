<?php

	 
function insere($conexao, $nome, $preco, $descricao){

		$query = "INSERT INTO venda (nome, preco, descricao) values ('{$nome}', {$preco}, '{$descricao}')";
		return mysqli_query($conexao, $query);

}

function buscaProdutos($conexao){
	$query = "SELECT * FROM venda";
	return mysqli_query($conexao, $query);

}

function remover($conexao, $id){
	$query = "DELETE FROM venda WHERE id={$id}";
	return mysqli_query($conexao, $query);
}