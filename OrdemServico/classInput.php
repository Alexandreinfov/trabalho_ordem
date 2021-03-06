<?php

	class Input{
		
		private $name;
		private $type;
		private $value;
		private $step;
		private $placeholder;
		private $label;
		
		public function get_name(){
			return($this->name);
		}

		public function get_type(){
			return($this->type);
		}

		public function get_label(){
			return($this->label);
		}	
		
		public function __construct($parametros){
			$this->name = $parametros["name"];
			$this->type = $parametros["type"];
			
			if(isset($parametros["value"])){
				$this->value = $parametros["value"];
			}
			if(isset($parametros["step"])){
				$this->step = $parametros["step"];
			}
			if(isset($parametros["placeholder"])){
				$this->placeholder = $parametros["placeholder"];
			}
			if(isset($parametros["label"])){
				$this->label = $parametros["label"];
			}
		}
		
		public function exibe(){
			
			if($this->label!=null){
				echo "<label>$this->label: </label>";
			}
			
			echo "<input type='$this->type' name='$this->name'";
						
			if($this->value!=null){
				echo " value='$this->value' ";
			}
			if($this->step!=null){
				echo " step='$this->step' ";
			}
			if($this->placeholder!=null){
				echo " placeholder='$this->placeholder' ";
			}

			
			echo " /><br />";
		}
		
	}

?>