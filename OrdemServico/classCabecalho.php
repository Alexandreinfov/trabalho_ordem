<?php
	class Cabecalho{
	
		private $charset;
		private $title;
		private $links;
		private $scripts;
		
		public function __construct($parametros){
			$this->charset = $parametros["charset"];
			$this->title = $parametros["title"];
			if(isset($parametros["links"])){
				$this->links = $parametros["links"];
			}
			if(isset($parametros["scripts"])){
				$this->scripts = $parametros["scripts"];
			}
		}
		
		public function exibe_cabecalho(){
			session_start();
			echo "<!DOCTYPE html>
					<html>
					<head>
						<meta charset='$this->charset' />
						 <title>$this->title</title>";
			if($this->links!=null){
					foreach($this->links as $i=>$l){
						echo "<link rel='stylesheet' href='$l' />";
					}
			}			 
			if($this->scripts!=null){
					foreach($this->scripts as $i=>$s){
						echo "<script type='text/javascript' src='$s'></script>";
					}
			}
			echo "
					</head>	
						<body>";
			
			$this->exibe_menu();
		}
		
		public function exibe_menu(){
			
			echo "<div id='menu'>
			
					Listar: 
						<ul>
							<li>
								<a href='listar_os.php'>
								Ordem de Serviço
								</a>
							</li>
							<li>
								<a href='listar_cliente.php'>
								Cliente
								</a>
							</li>
							<li>
								<a href='listar_funcionario.php'>
								Funcionário
								</a>
							</li>
							<li>
								<a href='listar_produto.php'>
								Produto
								</a>
							</li>
							<li>
								<a href='listar_servico.php'>
								Serviço
								</a>
							</li>
							<li>
								<a href='listar_veiculo.php'>
								Veiculo
								</a>
							</li>							
						</ul>";
					
					if(isset($_SESSION["admin"])){	
					echo "Cadastrar: 
						<ul>
							<li>
								<a href='form_os.php'>
								Ordem de Serviço
								</a>
							</li>
							<li>
								<a href='form_cliente.php'>
								Cliente
								</a>
							</li>
							<li>
								<a href='form_funcionario.php'>
								Funcionário
								</a>
							</li>
							<li>
								<a href='form_produto.php'>
								Produto
								</a>
							</li>
							<li>
								<a href='form_servico.php'>
								Serviço
								</a>
							</li>
							<li>
								<a href='form_veiculo.php'>
								Veiculo
								</a>
							</li>							
						</ul>";

						echo "<a href='logout.php'>Sair</a>";
					}
					else{
						echo "<a href='form_login.php'>Login</a>";
					}
				 echo "
				 </div>
				 <hr />";
		}
	
	}
	
	
	$parametros["charset"]="utf-8";
	$parametros["title"]="Listagem Estados";
	//$parametros["links"][] = "estiloTable.css";

	
	$c = new Cabecalho($parametros);
	$c->exibe_cabecalho();	
	
?>