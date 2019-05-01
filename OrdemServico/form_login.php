<?php

	include("classCabecalho.php");
	include("classForm.php");
	
	$parametros["action"]="validacao.php";
	$parametros["method"]="post";
	$parametros["tipoForm"] = "Login";
	
	$f = new Form($parametros);
	
	$parametros=null;
	$parametros["type"]="text";
	$parametros["name"]="email";
	$parametros["placeholder"]="Digite o usuário...";
	$f->add_input($parametros);

	$parametros=null;
	$parametros["type"]="password";
	$parametros["name"]="senha";
	$parametros["placeholder"]="Digite a senha...";
	$f->add_input($parametros);
	
	$parametros = "Logar";
	$f->add_button($parametros);
	
	if(isset($_GET["erro"])){
		echo "Login e/ou senha inválidos.<hr />";
	}
	$f->exibe();

?>