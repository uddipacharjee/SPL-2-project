<?php session_start() ?>
<?php 
include("function.php");
$conn=connect();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
	$answer=mysqli_real_escape_string($conn,$_POST['answer']);
	$question_id=$_REQUEST['question_id'];
	$user_id=$_SESSION['id'];
	echo "$answer<br>$question_id";

	$sql="insert into answer(question_id,user_id,answer) values('$question_id','$user_id','$answer')";
	if(mysqli_query($conn,$sql)){
		//$msg=urlencode("Answer inserted successfully");
		//header("Location:answer.php?AnswerInserted=".$msg."id=".$question_id);
		header("Location:answer.php?question_id=".$question_id);
	}
	else echo "Error: ".mysqli_error($conn);
}
else{

	$msg=urlencode("Please Login to answer a question");
	header("Location:login.php?LoginBeforeAnswer=".$msg);
}


?>