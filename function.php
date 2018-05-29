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