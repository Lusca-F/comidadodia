<?php
	require_once("connection.php");
	if(!isset($_GET["controller"]) || 
	   !isset($_GET["action"])){
		$controller = "ue";
		$action = "show";
	} else {
		$controller = $_GET["controller"];
		$action = $_GET["action"];
	}
	require_once("views/layout.php");
?>