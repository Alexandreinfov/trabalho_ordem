<?php
	include("classCabecalho.php");
	include("classTabela.php");
	include("classBancoDeDados.php");

	$tabela[]="cliente";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "COD_CLIENTE AS Codigo";
	$coluna[]= "Nome";
	$coluna[]= "CPF";
	$coluna[]= "Endereco";
	$coluna[]= "Telefone";
	
	$condicao = null;
	$ordenacao = null;
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);

	$t = new Tabela($m,"cliente",0);
	
	$t->exibe();
?>