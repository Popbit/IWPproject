<?php 
	include("include/function.php");
	session_start();

	//get the quizz info
	$info = array();
	for ($i=0; $i <10 ; $i++) { 
		$info[] = $_POST["singleInfo$i"];
	}
	for ($i=0; $i <10 ; $i++) { 
		array_push($info, $_POST["multiInfo$i"]);
	}
	

	//get the quizz answer 
	$answer = array();
	for ($i=0; $i <10 ; $i++) { 
		$answer[] = $_POST["singleAns$i"];
	}
	for ($i=0; $i <10 ; $i++) { 
		array_push($answer, $_POST["multiAns$i"]);
	}

	//get user answer
	$userAns = array();
	for ($i=0; $i <10 ; $i++) { 
		$userAns[] = $_POST["single-choice$i"];
	}
	for ($i=0; $i <10 ; $i++) { 
		array_push($userAns, $_POST["multiple-choice$i"]);
	}

	//check answer and get the grade
	$grade = 0;
	for($i=0; $i<20; $i++)
	{
		if($answer[$i] == $userAns[$i])
		{
			$grade += 5; 
		}
	}
	echo $grade;
	//if the user has log in, then  write into the user's history.txt


	// header("location:result.php")
 ?>