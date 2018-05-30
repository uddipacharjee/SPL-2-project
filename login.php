<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		 
		#msg{
			margin-left: 850px;
			background-color: white;
		}
	</style>
</head>
<body>
	<?php include("header.php"); ?>
	<?php 
		if(!empty($_REQUEST['SignupSucceeded'])){
			echo "<p id='msg'>$_REQUEST[SignupSucceeded]</p>"; // from create_user.php
			$_REQUEST['SignupSucceeded']=null;
			//header("refresh:3;url=login.php");	
		}
		if(!empty($_REQUEST['FirstLogin'])){
			echo "<p id='msg'>$_REQUEST[FirstLogin]</p>"; // from logout.php
			$_REQUEST['FirstLogin']=null;
			//header("refresh:3;url=questionList.php");	
		}
		if(!empty($_REQUEST['WrongUsernamePassword'])){
			echo "<p id=msg>$_REQUEST[WrongUsernamePassword]</p>"; // from access_account.php
			$_REQUEST['WrongUsernamePassword']=null;
		}
		if(!empty($_REQUEST['FirstLogout'])){
			echo "<p id='msg'>$_REQUEST[FirstLogout]</p>"; //from access_account.php
			$_REQUEST['FirstLogout']=false;
		}
		if(!empty($_REQUEST['LoginBeforePost'])){
			echo "<p id=msg>$_REQUEST[LoginBeforePost]</p>"; //from question_insert.php
			$_REQUEST['LoginBeforePost']=false;
		}
		if(!empty($_REQUEST['LoginBeforeAnswer'])){
			echo "<p id=msg>$_REQUEST[LoginBeforeAnswer]</p>"; //from answer_insert.php
			
		}
	?>
	
	
	<div class="w3-card-4 w3-light-blue w3-display-middle"  style="margin-top:150px ;width:25%;">

		<div class="w3-container w3-center">
		<h3>Log In</h3>
		 
		 
		<form class="form-inline" method="post" action="access_account.php">
			<div id="image">
				<img src="user1.png" width="150px" height="150px" alt="image">
			</div><hr>
			<div "form-group">
				<label>Username :</label><input class="form-control"  type="text" name="username" required>
			</div><br>
			<div "form-group">
				<label>Password :</label><input class="form-control"  type="password" name="password" required>
			</div>
			<br>
			<div "form-group">
				<button type="submit" class="btn btn-success   btn-block">Log In</button>
			</div>
			<br>
	</form>
		</div>


</div>

 <?php include("footer.php"); ?>

</body>
</html>