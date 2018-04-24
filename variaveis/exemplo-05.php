<?php

	
	$nome = 'Felipe';

	function  teste(){
		//não exerga nome pois est fora do escopo
		global $nome;
		echo $nome;

	}


	function  teste2(){

		echo $nome.' agora no teste 2';
		

	}

	teste();
	teste2();

?>