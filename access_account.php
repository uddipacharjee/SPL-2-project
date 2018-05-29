<?php
	session_start();
	$_SESSION['username']=$_SESSION['id']="";
	$_SESSION['loggedin']=false;
	include("function.php");

	$username=$_POST['username'];
	$password=$_POST['password'];

	if($_SESSION['loggedin']==true){
		$msg=urlencode("Logout First");
		header("Location:login.php?FirstLogout=".$msg);
		die();
	}

	$conn=connect();

	$sql="select * from user where username='$username' and password='$password'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	
	if($count==1){
		$row=mysqli_fetch_assoc($result);
		$_SESSION['username']=$username;
		$_SESSION['id']=$row['id'];
		$_SESSION['loggedin']=true;
		//echo "$row[id]--$row[username]--$row[password]";
		$msg="Successfully Loggedin";
		header("Location:questionList.php?LoginSuccessful=".$msg);
	}
	else{
		$msg="Wrong username or password";
		header("Location:login.php?WrongUsernamePassword=".$msg);
	}

?>
