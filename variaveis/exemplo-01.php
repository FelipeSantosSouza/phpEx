<?php


	$nome = "Felipe";
	$sobrenome= "Santos de Souza";

	$nomecompleto = $nome." ".$sobrenome;

	//echo "Nome: ".$nome." ".$sobrenome;
	echo $nomecompleto;
	echo "<br/>";



	unset($nome);

	if(isset($nome)){

		echo " Existe";

	}
	else{
		echo " Não existe";
	}

?>
	