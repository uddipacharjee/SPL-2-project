<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	 
		#msg{
			border:1px solid black;
			background-color: white;
		}
	</style>
</head>
<body>
	<?php include("header.php")  ?>
	<?php  
		if(!empty($_REQUEST['SignupFailed'])){
			echo "<p id='msg'>$_REQUEST[SignupFailed]</p>";  //creat_user.php
			$_REQUEST['SignupFailed']=null;
			header("refresh:2;url=signup.php");
		}
		
	?>
	 
	 <div class="w3-card-4 w3-light-blue w3-display-middle"  style="margin-top:150px ;width:25%;">

		<div class="w3-container w3-center">
		<h3>Sign Up</h3>
				
		 
		<form   method="post" action="create_user.php">
			<div id="image">
				<img src="user1.png" width="150px" height="150px" alt="image">
			</div><hr>
			<div "form-group">
				<label>Username :</label><input class="form-control"  type="text" name="username" required>
			</div><br>
			<div "form-group">
				<label>Email :</label><input class="form-control" type="email" name="email" required> 
			</div><br>
			<div "form-group">
				<label>Password :</label><input class="form-control"  type="password" name="password" required>
			</div>
			<br>
			<div "form-group">
				<button type="submit" class="btn btn-success   btn-block">Sign Up</button>
			</div>
			<br>
	</form>
		</div>

 
</div>
 

	<?php include("footer.php"); ?>

</body>
</html>