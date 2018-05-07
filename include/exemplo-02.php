<?php 

	//include "exemplo-01.php";
	//tenta funcionar mesmo sem funcionar
	
	require "exemplo-01.php";
	//obriga que o arquivo existe e funcione
	require_once "exemplo-01.php";
	//nao da erro se declarado duas vezes
	echo somar(10,20);

 ?>