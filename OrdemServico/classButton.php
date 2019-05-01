<?php

	class Button{
		
		private $label;
		
		public function __construct($label){
			$this->label = $label;
		}
		
		public function exibe(){
			echo "<button>$this->label</button>";
		}	
	}
?>