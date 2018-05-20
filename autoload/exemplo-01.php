<?php 

	function __autoload($nomeClasse){

		require_once("$nomeClasse.php");
	}
	
	$civic = new Civic();

	echo $civic->acelerar(150); 


 ?>