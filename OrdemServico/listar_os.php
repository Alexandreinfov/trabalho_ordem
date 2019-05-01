<?php
	include("classCabecalho.php");
	include("classTabela.php");
	include("classBancoDeDados.php");

	$tabela[]="OS";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "COD_OS AS Codigo";
	$coluna[]= "Cliente";
	$coluna[]= "Veiculo";
	$coluna[]= "Produto";
	$coluna[]= "Servico";
	$coluna[]= "Funcionario";
	
	$condicao = null;
	$ordenacao = null;
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);

	$t = new Tabela($m,"OS",0);
	
	$t->exibe();
?>