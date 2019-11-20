<?php 

function call($controller, $action){
	require_once("controllers/".$controller.
					"_controller.php");
	switch ($controller) {
		case "ups": //um case para cada crud
			require_once("models/ups.php");
			$controller = new UPSController();
			break;
		case "ue": //um case para cada crud
			require_once("models/ue.php");
			$controller = new UEController();
			break;
	}

	$controller->{$action}();
}

call($controller, $action);

?>