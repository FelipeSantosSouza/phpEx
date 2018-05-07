<?php 

	$pessoas = array();

	array_push($pessoas, array(
		'nome' => 'Felipe',
		'idade'=> 21 
	));

	array_push($pessoas, array(
		'nome' => 'Marcos',
		'idade'=> 35 
	));

	array_push($pessoas, array(
		'nome' => 'Salvador',
		'idade'=> 60 
	));

	echo json_encode($pessoas);


 ?>