<?php 
	include("include/function.php");
	session_start();
	if (!isset($_SESSION["account"])) {
		//header("location:error.php?type=nologin");
	}
?>


<!DOCTYPE html>
<html lang="en">  <!-- "zh-cn" for Chinese, "en" for English -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiz - QuizzMe!</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/quiz.css" rel="stylesheet">
</head>
<body>
    <header>
		<img id="head__logo--img" src="img/logo.png" alt="logo" height="50px">
		<div id="head__user-info">
			<img id="head__user-info--img" src="img/user-icon.png" alt="avatar">
			<span id="head__user-info--name">
			<?php 
				if (isset($_SESSION["account"])) {
			?>
			<?= get_name($_SESSION["account"]) ?>
			<?php	
				}
				else{ ?>
				username		
			<?php	
					}		
			 ?>							
			</span>
		</div>
		<ul id="head__menu">
			<a href="#"><li class="head__menu--choice">overview</li></a>
			<a href="home.html"><li class="head__menu--choice">login out</li></a>
			<li class="head__menu--choice">这个菜单只有登录状态才弹出来</li>
		</ul>
	</header>

	<form action="#">
		<div class="main-container" id="single-choice">
			<div id="single-choice__title">Ⅰ Single choice</div>
			<ul id="single-choice__list">
				<li>
					<div class="single-choice__question-title">
						<p class="single-choice__question-title--content"><span class="single-choice__question-title--question-order">Q1</span>question title<span class="single-choice__question-title--classify">question classification</span></p>
					</div>
					<div class="single-choice__option-list">
						<label class="single-choice__option-list--label"><input type="radio" class="single-choice__option-list--radio" name="single-choice1" value="option1"><span class="single-choice__option-list--content">option</span></label>
						<label class="single-choice__option-list--label"><input type="radio" class="single-choice__option-list--radio" name="single-choice1" value="option2"><span class="single-choice__option-list--content">option</span></label>
						<label class="single-choice__option-list--label"><input type="radio" class="single-choice__option-list--radio" name="single-choice1" value="option3"><span class="single-choice__option-list--content">option</span></label>
					</div>
				</li>
				<li>
					<div class="single-choice__question-title">
						<p class="single-choice__question-title--content"><span class="single-choice__question-title--question-order">Q2</span> question title<span class="single-choice__question-title--classify">question classification</span></p>
					</div>
					<div class="single-choice__option-list">
						<label class="single-choice__option-list--label"><input type="radio" class="single-choice__option-list--radio" name="single-choice2" value="option1"><span class="single-choice__option-list--content">option</span></label>
						<label class="single-choice__option-list--label"><input type="radio" class="single-choice__option-list--radio" name="single-choice2" value="option2"><span class="single-choice__option-list--content">option</span></label>
						<label class="single-choice__option-list--label"><input type="radio" class="single-choice__option-list--radio" name="single-choice2" value="option3"><span class="single-choice__option-list--content">option</span></label>
					</div>
				</li>
				<li>
					<div class="single-choice__question-title">
						<p class="single-choice__question-title--content"><span class="single-choice__question-title--question-order">Q3</span> question title<span class="single-choice__question-title--classify">question classification</span></p>
					</div>
					<div class="single-choice__option-list">
						<label class="single-choice__option-list--label"><input type="radio" class="single-choice__option-list--radio" name="single-choice3" value="option1"><span class="single-choice__option-list--content">option</span></label>
						<label class="single-choice__option-list--label"><input type="radio" class="single-choice__option-list--radio" name="single-choice3" value="option2"><span class="single-choice__option-list--content">option</span></label>
						<label class="single-choice__option-list--label"><input type="radio" class="single-choice__option-list--radio" name="single-choice3" value="option3"><span class="single-choice__option-list--content">option</span></label>
					</div>
				</li>
			</ul>
		</div>

		<div class="main-container" id="multiple-choice">
			<div id="multiple-choice__title">Ⅱ Multiple choice</div>
			<ul id="multiple-choice__list">
				<li>
					<div class="multiple-choice__question-title">
						<p class="multiple-choice__question-title--content"><span class="multiple-choice__question-title--question-order">Q1</span>question title<span class="multiple-choice__question-title--classify">question classification</span></p>
					</div>
					<div class="multiple-choice__option-list">
						<label class="multiple-choice__option-list--label"><input type="checkbox" name="multiple-choice1" value="option1" class="multiple-choice__option-list--checkbox"><span class="multiple-choice__option-list--content">option</span></label>
						<label class="multiple-choice__option-list--label"><input type="checkbox" name="multiple-choice1" value="option2" class="multiple-choice__option-list--checkbox"><span class="multiple-choice__option-list--content">option</span></label>
						<label class="multiple-choice__option-list--label"><input type="checkbox" name="multiple-choice1" value="option3" class="multiple-choice__option-list--checkbox"><span class="multiple-choice__option-list--content">option</span></label>
						<label class="multiple-choice__option-list--label"><input type="checkbox" name="multiple-choice1" value="option4" class="multiple-choice__option-list--checkbox"><span class="multiple-choice__option-list--content">option</span></label>
					</div>
				</li>
				<li>
					<div class="multiple-choice__question-title">
						<p class="multiple-choice__question-title--content"><span class="multiple-choice__question-title--question-order">Q2</span>question title<span class="multiple-choice__question-title--classify">question classification</span></p>
					</div>
					<div class="multiple-choice__option-list">
						<label class="multiple-choice__option-list--label"><input type="checkbox" name="multiple-choice2" value="option1" class="multiple-choice__option-list--checkbox"><span class="multiple-choice__option-list--content">option</span></label>
						<label class="multiple-choice__option-list--label"><input type="checkbox" name="multiple-choice2" value="option2" class="multiple-choice__option-list--checkbox"><span class="multiple-choice__option-list--content">option</span></label>
						<label class="multiple-choice__option-list--label"><input type="checkbox" name="multiple-choice2" value="option3" class="multiple-choice__option-list--checkbox"><span class="multiple-choice__option-list--content">option</span></label>
						<label class="multiple-choice__option-list--label"><input type="checkbox" name="multiple-choice2" value="option4" class="multiple-choice__option-list--checkbox"><span class="multiple-choice__option-list--content">option</span></label>
					</div>
				</li>
				<li>
					<div class="multiple-choice__question-title">
						<p class="multiple-choice__question-title--content"><span class="multiple-choice__question-title--question-order">Q3</span>question title<span class="multiple-choice__question-title--classify">question classification</span></p>
					</div>
					<div class="multiple-choice__option-list">
						<label class="multiple-choice__option-list--label"><input type="checkbox" name="multiple-choice3" value="option1" class="multiple-choice__option-list--checkbox"><span class="multiple-choice__option-list--content">option</span></label>
						<label class="multiple-choice__option-list--label"><input type="checkbox" name="multiple-choice3" value="option2" class="multiple-choice__option-list--checkbox"><span class="multiple-choice__option-list--content">option</span></label>
						<label class="multiple-choice__option-list--label"><input type="checkbox" name="multiple-choice3" value="option3" class="multiple-choice__option-list--checkbox"><span class="multiple-choice__option-list--content">option</span></label>
						<label class="multiple-choice__option-list--label"><input type="checkbox" name="multiple-choice3" value="option4" class="multiple-choice__option-list--checkbox"><span class="multiple-choice__option-list--content">option</span></label>
					</div>
				</li>
			</ul>
		</div>

		<div class="main-container" id="check-msg">
			<p id="check-msg__time-left">Time left : <span id="check-msg__time-left--time">20:00</span></p>
			<input type="button" value="">
			<input type="submit" value="Finish quiz" id="check-msg__submit--button">
		</div>
	</form>

	<footer>
		<p>It's a project of IWP. &copy; ZhouyangYifan TangPeixian QiXuebin</p>
	</footer>

	<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>