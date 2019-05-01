<?php
	include("classCabecalho.php");
	include("classTabela.php");
	include("classBancoDeDados.php");

	$tabela[]="veiculo";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "COD_VEICULO AS Codigo";
	$coluna[]= "Placa";
	$coluna[]= "Modelo";
	$coluna[]= "Marca";
	$coluna[]= "Ano";
	
	$condicao = null;
	$ordenacao = null;
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);

	$t = new Tabela($m,"veiculo",0);
	
	$t->exibe();
?>