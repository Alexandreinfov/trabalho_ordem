<?php
	include("classCabecalho.php");
	include("classTabela.php");
	include("classBancoDeDados.php");

	$tabela[]="produto";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "COD_PRODUTO AS Codigo";
	$coluna[]= "Descricao";
	$coluna[]= "Preco";
	
	$condicao = null;
	$ordenacao = null;
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);

	$t = new Tabela($m,"produto",0);
	
	$t->exibe();
?>