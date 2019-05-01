<?php

	include("classInputOpcoes.php");
	include("classSelect.php");
	include("classButton.php");

	class Form{
		
		private $action;
		private $method;		
		public $entradas;
		public $tipoForm;
		
		public function __construct($parametros){
			
			$this->action = $parametros["action"];
			$this->method = $parametros["method"];
			$this->tipoForm = $parametros["tipoForm"];
			
		}

		public function add_button($parametros){
			$this->entradas[] = new Button($parametros);
		}
		
		public function add_input($parametros){
			$this->entradas[] = new Input($parametros);		
		}
		
		//public function add_inputOpcoes($parametros){
		//	$this->entradas[] = new InputOpcoes($parametros);
		//}		
		
		public function add_select($name,$options){
			$this->entradas[] = new Select($name,$options);
		}
		
		
		public function exibe(){
			
			echo "
				<form method='$this->method' action='$this->action'>
					<fieldset>
						<legend><b> Cadastro de $this->tipoForm </b></legend>";

				foreach($this->entradas as $i=>$e){
					$e->exibe();
					echo "<br/>";
				}
				
			echo "	</fieldset>
				</form>";
		}
	}



?>