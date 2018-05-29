<?php
include("function.php");

 $username=$_POST['username'];
 $email=$_POST['email'];
 $password=$_POST['password'];

 $conn=connect();

 $query1=mysqli_query($conn,"select username from user where username='$username' ");
 if(mysqli_num_rows($query1)==0){
 	 $query2=mysqli_query($conn,"select username from user where email='$email' ");
 	 
 	 if(mysqli_num_rows($query2)==0){
 	 	 $sql="insert into user(username,email,password) values('$username','$email','$password')";

		 if(mysqli_query($conn,$sql)){
		 	$msg=urlencode("Account created successfully. Please login Now");
		 	header("Location:login.php?SignupSucceeded=".$msg);
		 }
		 else{
		 	echo "Error: ".mysqli_error($conn);
		 	//header("refreash:2;url=signup.php");
		 }
 	 }
 	 else{
 	 	$msg=urlencode("This email already taken");
 		header("Location:signup.php?SignupFailed=".$msg);
 	 }
 	 
 }
 else{
 	$msg=urlencode("This username already taken");
 	header("Location:signup.php?SignupFailed=".$msg);
 }

?>
