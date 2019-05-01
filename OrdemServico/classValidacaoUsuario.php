<?php

	include("classUsuario.php");

	class ValidacaoUsuario{
		
		private $conexao;
		private $login;
		private $senha;
		
		public function __construct($conexao,$valores){
			$this->conexao=$conexao;
			$this->login=$valores["login"];
			$this->senha=$valores["senha"];			
		}
		
		public function validar(){
			$consulta = "SELECT login, senha FROM admin 
						WHERE login=:login AND senha=:senha";
			
			$stmt = $this->conexao->prepare($consulta);
			$stmt->bindValue(":login",$this->login);
			$stmt->bindValue(":senha",$this->senha);
			
			$stmt->execute();
			
			if($stmt->rowCount()==1){
				session_start();
				$linha = $stmt->fetch();
				$_SESSION["admin"] = new Usuario($linha);
				header("location: index.php");
			}
			else{
				header("location: form_login.php?erro=1");
			}	
		}	
	}
?>