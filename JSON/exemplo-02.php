<?php 

	$json = '[{"nome":"Felipe","idade":21},{"nome":"Marcos","idade":35},{"nome":"Salvador","idade":60}]';

	$json = json_decode($json, true);

	var_dump($json);


 ?>