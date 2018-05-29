
<!DOCTYPE html>
<html>
<head>
	<title>asknknow</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style type="text/css">
		.navbar {
			margin-bottom: 0;
			background-color: #316ba0;
			z-index: 9999;
			border: 0;
			font-size: 12px !important;
			line-height: 1.42857143 !important;
			letter-spacing: 4px;
			border-radius: 0;
		}

		.navbar li a, .navbar .navbar-brand {
			color: #fff !important;
		}

		.navbar-nav li a:hover, .navbar-nav li.active a {
			color: #f4511e !important;
			background-color: #fff !important;
		}

		.navbar-default .navbar-toggle {
			border-color: transparent;
			color: #fff !important;
		}
		
	</style>
</head>
<body>
	<div>
	<img src="ask2.jpg" width="100%" height="250px">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			</button>
			<a class="navbar-brand" href="login.php">asknknow</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="question_form.php">ASK</a></li>
				<li><a href="questionList.php">QUESTION LIST</a></li>
				<li><a href="about.php">ABOUT</a></li>
				 
				<?php 
					if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
						echo "<li><a href='logout.php'>	LOG OUT</a></li>";
						//echo "<li><a style='color:blue;float:right'  href='profile.php?user_id=$_SESSION[id]'>$_SESSION[username]<a></li>";
					}
					else{
						echo "<li><a href='signup.php'>SIGN UP</a></li>";
						echo "<li><a href='login.php'>LOG IN</a></li>";
					}
				?>
			</ul>
			</div>
		</div>
	</nav>
	</div>
	<?php 
					if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
						include("sidebar.php");
					}
					 
	?>
	
</body>
</html>