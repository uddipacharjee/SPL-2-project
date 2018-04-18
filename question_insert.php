<?php
session_start();
?>

<?php
$conn=connect();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
	echo "".$_SESSION['username']."<br>";
	echo "".$_SESSION['id'];


	$title=$_POST['title'];
	$description=$_POST['description'];
	$category=$_POST['category'];
	$user_id=$_SESSION['id'];


	//echo "<br>$title<br>$description<br>$category<br>";
	$sql="insert into question(title,content,category,user_id) values('$title','$description','$category','$user_id')";

	if(mysqli_query($conn,$sql)){
		echo "inserted<br>";
	}
	else{
		echo "failed ".mysqli_error();
	}
}
else{
	ob_start();
	$output = ob_get_contents();
   
	echo "Please log in first";
	header("Location:login.php");
	ob_end_clean();
}





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