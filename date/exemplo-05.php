<?php 

	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

	$data = new DateTime();

	echo $data->format('d/m/Y h:i:s');

 ?>