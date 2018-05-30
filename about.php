<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
				<p>BSSE 0844</p>
					<hr>
					<img src="user.png" height="100" width="100" alt="Avatar" class="w3-left w3-circle">
				<p>My Contribution: Basic Authentication Module, Building Question and Answer Module</p>
			</div>

			<button class="w3-button w3-block w3-dark-grey">+ Connect</button>

		</div>
	</div>

 <?php include("footer.php"); ?>


</body>
</html>