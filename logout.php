<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#msg{
			background-color: yellow;
			border:1px solid black;
		}
	</style>
</head>
<body>
	<?php include("header.php") ?>
	<?php 
		if($_SESSION['loggedin']==true){
			$_SESSION['loggedin']=false;
			//session_destroy();
			echo "<p id=msg>Logged out</p>";
			unset($_SESSION['username']);
			header("refresh:0;url=logout.php");
			
		}
		else{
			$msg=urlencode("Please login First");
			header("Location:login.php?FirstLogin=".$msg);
		}
	?>
</body>
</html>