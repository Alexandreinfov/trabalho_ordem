<?php

	class Usuario{
	
		private $login;
		private $senha;
		private $permissao;
		
		public function __construct($parametros){
			$this->login = $parametros["login"];
			$this->senha = $parametros["senha"];
			$this->permissao = $parametros["permissao"];			
		}
		
		public function get_login(){
			return($this->login);
		}
	}
?>