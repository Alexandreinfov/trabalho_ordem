<?php
	include("classCabecalho.php");
	include("classBancoDeDados.php");
	include("conexao.php");
	
	$operacao = new BancoDeDados($conexao);

	$operacao->insercao($_GET["tabela"],$_POST);
	
	echo $_GET["tabela"]." cadastrado(a) com sucesso.";
?>