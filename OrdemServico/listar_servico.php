<?php
	include("classCabecalho.php");
	include("classTabela.php");
	include("classBancoDeDados.php");

	$tabela[]="servico";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "COD_SERVICO AS Codigo";
	$coluna[]= "Descricao";
	$coluna[]= "Preco";
	
	$condicao = null;
	$ordenacao = null;
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);

	$t = new Tabela($m,"servico",0);
	
	$t->exibe();
?>