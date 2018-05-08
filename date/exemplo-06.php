<?php 

	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

	$data = new DateTime();
	$periodo = new DateInterval('P15D');
	echo $data->format('d/m/Y h:i:s');


	$data->add($periodo);

	echo '<br>'.$data->format('d/m/Y h:i:s');

 ?>