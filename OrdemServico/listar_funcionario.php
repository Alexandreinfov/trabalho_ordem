<?php
	include("classCabecalho.php");
	include("classTabela.php");
	include("classBancoDeDados.php");

	$tabela[]="funcionario";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "COD_FUNCIONARIO AS Codigo";
	$coluna[]= "Nome";
	$coluna[]= "CPF";
	$coluna[]= "Endereco";
	$coluna[]= "Telefone";
	$coluna[]= "Salario";
	
	$condicao = null;
	$ordenacao = null;
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);

	$t = new Tabela($m,"funcionario",0);
	
	$t->exibe();
?>