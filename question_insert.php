<?php session_start() ?>

<?php
include("function.php");
$conn=connect();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
	//echo "".$_SESSION['username']."<br>";
	//echo "".$_SESSION['id'];


	$title=mysqli_real_escape_string($conn,$_POST['title']);
	$description=mysqli_real_escape_string($conn,$_POST['description']);
	$category=$_POST['category'];
	$user_id=$_SESSION['id'];


	echo "<br>$title<br>$description<br>$category<br>";
	$sql="insert into question(title,question,category,user_id) values('$title','$description','$category','$user_id')";

	if(mysqli_query($conn,$sql)){
		$msg=urlencode("Question inserted successfully");
		header("Location:questionList.php?QuestionInserted=".$msg);
	}
	else{
		echo "failed ".mysqli_error($conn);
	}
}
else{
	$msg=urlencode("please log in first");
	header("Location:login.php?LoginBeforePost=".$msg);
}





?>
