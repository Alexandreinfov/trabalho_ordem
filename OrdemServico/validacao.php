<?php

	include("conexao.php");
	include("classValidacaoUsuario.php");

	$v = new ValidacaoUsuario($conexao,$_POST);

	$v->validar();

?>