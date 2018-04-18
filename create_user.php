<?php

$conn=connect();


 $username=$_POST['username'];
 $email=$_POST['email'];
 $password=$_POST['password'];


 $sql="insert into users(username,email,password) values('$username','$email','$password')";

 if(mysqli_query($conn,$sql)){
// 	makeUserLogin($email);
 	
 	redirectTo('/practice');
 }
 else{
 	echo "Error: ".mysqli_error($conn);
 }




// function makeUserLogin($email){
// 	session_start();
// }



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


function redirectTo($url){
 	header("Location:$url");
}

?>