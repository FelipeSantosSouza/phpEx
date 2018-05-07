<?php 

	require_once('config.php');


	echo session_save_path().'<br>';

	switch (session_status()) {
		case PHP_SESSION_DISABLED;
			echo 'se as sessões estiverem desabilitadas';
			break;
		case PHP_SESSION_ENABLED;
			echo 'se as sessões estiverem habilitadas, mas nenhuma existir';
			break;
		case PHP_SESSION_ACTIVE;
			echo 'se as sessões estiverem habilitadas, e uma existir.';
			break;
		
	}



 ?>