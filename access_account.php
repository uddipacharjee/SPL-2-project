<?php
	session_start();

	$username=$_POST['username'];
	$password=$_POST['password'];

	$conn=connect();

	$sql="select * from users where username='$username' and password='$password'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	
	if($count==1){
		$row=mysqli_fetch_assoc($result);
		$_SESSION['username']=$username;
		$_SESSION['id']=$row['id'];
		$_SESSION['loggedin']=true;
		//echo "$row[id]--$row[username]--$row[password]";
		header("Location:questionList.php");
	}
	else echo "not exist";







?>
<?php

function connect(){
	$server="localhost";
	$user="root";
	$password="";
	$dbname="practice";

	$conn=mysqli_connect($server,$user,$password,$dbname);

	return $conn;
}
?>