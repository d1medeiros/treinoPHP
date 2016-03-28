<?php

	 
function insere($conexao, $nome, $preco, $descricao, $categoria, $rede){

		$query = "INSERT INTO venda( nome, preco, descricao, id_categoria, id_rede) VALUES ('{$nome}', {$preco}, '{$descricao}', {$categoria}, {$rede})";
		return mysqli_query($conexao, $query);

}

function buscaProdutos($conexao){
	$query = "SELECT * FROM venda";
	$query2 = "SELECT venda.id, venda.nome as vnome, venda.preco, venda.descricao, categorias.nome as cnome, rede.nome as rnome FROM venda INNER JOIN categorias ON venda.id_categoria = categorias.id INNER JOIN rede ON rede.id = venda.id_rede";
	return mysqli_query($conexao, $query2);

}

function remover($conexao, $id){
	$query = "DELETE FROM venda WHERE id={$id}";
	return mysqli_query($conexao, $query);
}