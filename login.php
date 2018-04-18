<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form{
			width: 500px;
			border: 1px solid black;
			padding: 10px;
			margin: auto;
		}
		form div{
			margin-top: 5px;
		}
		label{
			width: 100px;
			display: inline-block;
		}
		#button{
			margin-left: 100px;
		}
		#image{
			text-align: center;
			margin-bottom: 30px;
			margin-left: 150px;
			width: 40%;
			background-color: lightgreen;
			border-radius: 50%;
		}

	</style>
</head>
<body>
	<?php include("header.php") ?>
	
	<form method="post" action="access_account.php">
		<div id="image">
			<img src="user.png" width="150px" height="150px" alt="image">
		</div>
		<div>
			<label>username :</label><input type="text" name="username" required>
		</div>
		<div>
			<label>password :</label><input type="password" name="password" required>
		</div>
		<div>
			<input type="submit" value="Login" id="button">
		</div>
	</form>
</body>
</html>