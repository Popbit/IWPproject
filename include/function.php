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

function quizzdb(){
	return "quizzDB";
}

function typePath($type){
	$quizzdb = quizzdb();
	return "$quizzdb/$type/*";
}

function get_quizz($typePath){
	$quizzSum = glob($typePath);
	shuffle($quizzSum);
	$quizzShow = array_slice($quizzSum,0,10);
	return $quizzShow;
}

function get_classify($quizz){
	$quizzData = file($quizz, FILE_IGNORE_NEW_LINES);
	return $quizzData[0];
}

function get_title($quizz){
	$quizzData = file($quizz, FILE_IGNORE_NEW_LINES);
	return $quizzData[1];
}

function get_answer($quizz){
	$quizzData = file($quizz, FILE_IGNORE_NEW_LINES);
	return $quizzData[2];
}

function get_option($quizz){
	$quizzData = file($quizz, FILE_IGNORE_NEW_LINES);
	$option = array_slice($quizzData,3);
	return $option;
}

function get_point(){

}

?>
