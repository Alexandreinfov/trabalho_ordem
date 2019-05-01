<?php

	include("classOption.php");

	class Select{

		private $label;
		private $name;
		private $options;
		
		public function __construct($name,$options){
			$this->name=$name;

			foreach($options as $i=>$o){
				$this->options[] = new Option($o);
			}	
		}
		
		public function exibe(){
			
			echo "<label> $this->name: </label>";

			echo "<select name='$this->name'>
					<option selected>::selecione::</option>";
				
			foreach($this->options as $i=>$o){
				$o->exibe();
			}
			
			echo "</select> <br />";
		}
	}
?>