<?php
	
	include("classUsuario.php");
	
	
	if(!isset($_SESSION["admin"])){
		header("location: form_login.php");
	}


?>