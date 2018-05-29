<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.user_profile_box{
			margin: 50px;
			border: 1px solid green;
			padding: 20px;
			color: #9f03af;
			/*background-color: #9acfc5;*/
		}
		.asked_question_box{
			margin: 50px;
			border: 1px solid orange;
			padding: 20px;
		}
		.answered_question_box{
			margin: 50px;
			border: 1px solid red;
			padding: 20px;
		}
		#profile_text{
			background-color: #9ab1cf;
			color:white;
			padding: 5px;
			font-size: 40px;
		}
		#asked_text{
			background-color: tomato;
			color:white;
			padding: 5px;
		}
		#answered_text{
			background-color: green;
			color:white;
			padding: 5px;
		}
	</style>
</head>
<body>
	<?php include('header.php'); ?>
	<div class="container">
		<br>
		<div class="col-md-12">
		 
		<br>
	<?php 
		include('function.php');
		$user_id=$_REQUEST['user_id'];
		

		$conn=connect();
		$sql="select * from user where id='$user_id'";

		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)==1){
			$row=mysqli_fetch_assoc($result);

			echo "<div class='w3-card-4'>";
			echo "<header class='w3-container w3-green'>
			<h1>Profile</h1>  
			</header><br>";
			echo "<div class='w3-container'>
			<h5>Username: <b>".$row['username']."</b><br></h5> 
			<h5>Email: <b>".$row['email']."</b><br></h5> 
			<hr>";
 
			echo "</div></div><br><hr>";
		}

		//Asked question
		
		$sql="select id,title from question where user_id='$user_id'";

		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			echo "<div class='w3-card-4'>";
			echo "<header class='w3-container w3-green'>
			<h1>Asked Questions</h1>  
			</header><br>";

			while ($row=mysqli_fetch_assoc($result)) {
				echo "<div class='w3-container'>
						<h5><b><a href='answer.php?question_id=$row[id]'>$row[title]</a><br></b><br></h5> 
						<hr></div>";	
			}
			echo "</div><br><hr>";
		}

		//Answered question

		$sql="select question.title,question.id from question,answer where answer.question_id=question.id and answer.user_id='$user_id'";

		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			
			echo "<div class='w3-card-4'>";
			echo "<header class='w3-container w3-green'>
			<h1>Answered Questions</h1>  
			</header><br>";

			while ($row=mysqli_fetch_assoc($result)) {
				echo "<div class='w3-container'>
						<h5><b><a href='answer.php?question_id=$row[id]'>$row[title]</a><br></h5> 
						<hr></div>";	
			}
			echo "</div>";
		}

	?>
</body>
</html>