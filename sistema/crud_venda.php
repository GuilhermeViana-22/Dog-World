<?php
include "banco.php";

if(isset($_REQUEST["finalizar_venda"])) {
	
	$consultaFinalizarVenda = "UPDATE vendas SET status_venda = 2  WHERE cod_venda = " . $_REQUEST["cod_venda"];
	
	$queryFinalizarVenda = $conexao->query($consultaFinalizarVenda);
	var_dump($consultaFinalizarVenda);
		if(!$queryFinalizarVenda) {
				header("Location: cadastro_venda.php?erro=1");

		} else {
				header("Location: cadastro_venda.php?sucesso=1");

		}
} else if(isset($_REQUEST["cancelar_venda"])) {
	
		$consultaCancelarVenda = "DELETE FROM vendas WHERE cod_venda = " . $_REQUEST["cod_venda"];
	
		$queryCancelarVenda = $conexao->query($consultaCancelarVenda);
	
		$consultaCancelarProdutosVenda = "DELETE FROM produtos_venda WHERE cod_venda = " . $_REQUEST["cod_venda"];
	
		$queryCancelarProdutosVenda = $conexao->query($consultaCancelarProdutosVenda);
		
		if(!$queryCancelarVenda) {
				header("Location: cadastro_venda.php?erro=4");

		} else {
				header("Location: cadastro_venda.php?sucesso=5");

		}
} else {

	if(isset($_REQUEST["cod_venda"])) {
		
		if(isset($_REQUEST["deletar"])) {
			
			$consultaDeletarProdutoVenda = "DELETE FROM produtos_venda WHERE cod_venda = " . $_REQUEST["cod_venda"] . " AND cod_produto = " . $_REQUEST["cod_produto"];
			$queryDeletarProdutoVenda = $conexao->query($consultaDeletarProdutoVenda);
			
		if(!$queryDeletarProdutoVenda) {
			header("Location: cadastro_venda.php?erro=2");
		} else {
			
			header("Location: cadastro_venda.php?cod_venda=" . $_REQUEST["cod_venda"]);
		}
			
		} else {
			
		$consultaProdutoExistente = "SELECT * FROM produto WHERE cod_produto = " . $_REQUEST["cod_produto"];
		$queryProdutoExistente = $conexao->query($consultaProdutoExistente);
		
		if($queryProdutoExistente->num_rows > 0) {
			$dadosProdutoExistente = $queryProdutoExistente->fetch_assoc();
		$ttl = $dadosProdutoExistente["valor_unitario"] * $_REQUEST["cod_prod_quantidade"];
		#var_dump($ttl);
		$consultaProdutoVenda = "INSERT INTO produtos_venda (cod_produto, cod_venda, cod_prod_quantidade, v_total) VALUES (".$_REQUEST["cod_produto"].", ".$_REQUEST["cod_venda"].", ".$_REQUEST["cod_prod_quantidade"].", ". $ttl.")";	
		var_dump($consultaProdutoVenda);
		$queryProdutoVenda = $conexao->query($consultaProdutoVenda);
			var_dump($queryProdutoVenda);
		if(!$queryProdutoVenda) {
		header("Location: cadastro_venda.php?erro=3");
		} else {
		header("Location: cadastro_venda.php?cod_venda=" . $_REQUEST["cod_venda"]);		
		}
		
		} else {
		header("Location: cadastro_venda.php?erro=1");
		}
	
	}
	

	} else {
		
	$consultaVenda = "INSERT INTO vendas (cod_funcionario, cpf_cliente, status_venda, nome_cliente, valor_total, forma_pagamento) VALUES (".$_SESSION["Cod_funcionario"].", '".$_REQUEST["cpf_cliente"]."', 1, '".$_REQUEST["nome_cliente"]."' , '". 0 ."', '".$_REQUEST["forma_pagamento"]."')";
	echo $consultaVenda;
	echo "<br/>";
	echo var_dump($consultaVenda);
	$queryVenda = $conexao->query($consultaVenda);
	
	$idvenda = $conexao->insert_id;
			
	$consultaProdutoExistente = "SELECT * FROM produto WHERE cod_produto = " . $_REQUEST["cod_produto"];
	$queryProdutoExistente = $conexao->query($consultaProdutoExistente);
			$dadosProdutoExistente = $queryProdutoExistente->fetch_assoc();

	$consultaProdutoVenda = "INSERT INTO produtos_venda (cod_produto, cod_venda, cod_prod_quantidade, v_total) VALUES (".$_REQUEST["cod_produto"].", ".$idvenda.", ".$_REQUEST["cod_prod_quantidade"].", ".$dadosProdutoExistente["valor_unitario"] * $_REQUEST["cod_prod_quantidade"].")";	
		echo var_dump($consultaProdutoVenda) ;

	$queryProdutoVenda = $conexao->query($consultaProdutoVenda);
	
	
	if(!$queryVenda || !$queryProdutoVenda) {
	header("Location: cadastro_venda.php?erro=1");
	} else {
		
	header("Location: cadastro_venda.php?cod_venda=" . $idvenda);
		
	}
	
	
	}

}
