<?php
function userdb() {
	return "userDB";
}

function get_account($login) {
	$info = file(userdb() . "/$login/info.txt",FILE_IGNORE_NEW_LINES);
	return $info[1];
}

function get_psw($login) {
	$info = file(userdb() . "/$login/info.txt",FILE_IGNORE_NEW_LINES);
	return $info[2];
}

function get_name($login) {
	$info = file(userdb() . "/$login/info.txt",FILE_IGNORE_NEW_LINES);
	return $info[0];
}

function check() {
	if ( ! isset($_SESSION["loggedin"]) || ! $_SESSION["loggedin"] ) {
		header("Location: error.php?type=nologin");
		die();
	}
}

function quizzdb(){
	return "quizzDB";
}

// function get_class($classify){

// }



?>
