<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.user_profile_box{
			margin: 50px;
			border: 1px solid green;
			padding: 20px;
			color: #9f03af;
			/*background-color: #9acfc5;*/
		}
		.asked_question_box{
			margin: 50px;
			border: 1px solid orange;
			padding: 20px;
		}
		.answered_question_box{
			margin: 50px;
			border: 1px solid red;
			padding: 20px;
		}
		#profile_text{
			background-color: #9ab1cf;
			color:white;
			padding: 5px;
			font-size: 40px;
		}
		#asked_text{
			background-color: tomato;
			color:white;
			padding: 5px;
		}
		#answered_text{
			background-color: green;
			color:white;
			padding: 5px;
		}
	</style>
</head>
<body>
	<?php include('header.php'); ?>
    <div class="container">
		<br>
		<div class="w3-card-4">

			<header class="w3-container w3-light-grey">
			<h1>About</h1>
			</header>

			<div class="w3-container">
			<p><h5>This project is done for SPL 2. <br> Our Supervisor is Assistant Professor MD. Nurul Ahad Tawhid.</h5></p>
			</div>

			<footer class="w3-container w3-light-grey">
			<h5>Team Member:</h5>
			</footer>

		</div>
        <br>
		      
	 
		<div class="w3-card-4">

			<header class="w3-container w3-light-grey">
				<h3>Samima Akter</h3>
			</header>

			<div class="w3-container">
				<p>BSSE 0841</p>
				<hr>
				<img src="s.jpg" height="100" width="100" alt="Avatar" class="w3-left w3-circle">
				<p>My Contribution: Building User Interface, Designing all pages, Using MD5 Hash in Authentication, Implement Search and Sort 
				Module
				</p>
			</div>

			<button class="w3-button w3-block w3-dark-grey"><a href="https://www.facebook.com/shamima.shoshy"> + Connect</a></button>

		</div>
		<br><hr>
		<div class="w3-card-4">

			<header class="w3-container w3-light-grey">
				<h3>Uddip Acharjee</h3>
			</header>

			<div class="w3-container">
				<p>BSSE 0842</p>
				<hr>
				<img src="user.png" height="100" width="100" alt="Avatar" class="w3-left w3-circle">
				<p>IMy Contribution: Basic Authentication Module, Building Question and Answer Module</p>
			</div>

			<button class="w3-button w3-block w3-dark-grey">+ Connect</button>

		</div>
	</div>


</body>
</html>