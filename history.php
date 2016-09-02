<?php 
	include("include/function.php");
	session_start();
	if (isset($_SESSION["account"])) {
		$account = $_SESSION["account"];
	}

	$userdb = userdb();
	

?>

