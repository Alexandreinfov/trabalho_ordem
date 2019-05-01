<?php
	include("classCabecalho.php");
	include("classForm.php");
	include("conexao.php");

	$parametros = null;
	$parametros["action"] = "insere.php?tabela=OS";
	$parametros["method"] = "post";
	$parametros["tipoForm"] = "Ordem de Serviço";
	$f = new Form($parametros);

	$consulta = "SELECT COD_CLIENTE as value, NOME as label FROM CLIENTE";
	$stmt = $conexao->prepare($consulta);
	$stmt->execute();
	while($linha = $stmt->fetch()){ //pegando os valores linha por linha.
		$clientes[] = $linha;
	}
	$f->add_select("Cliente",$clientes);


	$consulta = "SELECT COD_VEICULO as value, PLACA as label FROM VEICULO";
	$stmt = $conexao->prepare($consulta);
	$stmt->execute();
	while($linha = $stmt->fetch()){ //pegando os valores linha por linha.
		$veiculos[] = $linha;
	}
	$f->add_select("Veiculo",$veiculos);	


	$consulta = "SELECT COD_PRODUTO as value, DESCRICAO as label FROM PRODUTO";
	$stmt = $conexao->prepare($consulta);
	$stmt->execute();
	while($linha = $stmt->fetch()){ //pegando os valores linha por linha.
		$produtos[] = $linha;
	}
	$f->add_select("Produto",$produtos);


	$consulta = "SELECT COD_SERVICO as value, DESCRICAO as label FROM SERVICO";
	$stmt = $conexao->prepare($consulta);
	$stmt->execute();
	while($linha = $stmt->fetch()){ //pegando os valores linha por linha.
		$servicos[] = $linha;
	}
	$f->add_select("Servico",$servicos);


	$consulta = "SELECT COD_FUNCIONARIO as value, NOME as label FROM FUNCIONARIO";
	$stmt = $conexao->prepare($consulta);
	$stmt->execute();
	while($linha = $stmt->fetch()){ //pegando os valores linha por linha.
		$funcionarios[] = $linha;
	}
	$f->add_select("Funcionario",$funcionarios);

	$parametros = "Cadastrar";
	$f->add_button($parametros);

	$f->exibe();
?>