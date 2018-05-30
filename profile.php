<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
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

			echo 
			"
			<div class='w3-card-4'>
				<header class='w3-container w3-green'>
					<h1>Profile</h1>  
				</header><br>
				<div class='w3-container'>
					<h5>Username: <b>".$row['username']."</b><br></h5> 
					<h5>Email: <b>".$row['email']."</b><br></h5> 
					<hr>
				</div>
			</div>
			<br><hr>";
		}

		//Asked question
		
		$sql="select id,title from question where user_id='$user_id'";

		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			echo 
			"
			<div class='w3-card-4'>
				<header class='w3-container w3-green'>
					<h1>Asked Questions</h1>  
				</header><br>";

			while ($row=mysqli_fetch_assoc($result)) {
				echo
					"
					<div class='w3-container'>
						<h5><b><a href='answer.php?question_id=$row[id]'>$row[title]</a><br></b><br></h5> 
						<hr>
					</div>";	
			}
			echo "</div><br><hr>";
		}

		//Answered question

		$sql="select question.title,question.id from question,answer where answer.question_id=question.id and answer.user_id='$user_id'";

		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			
			echo 
			"
			<div class='w3-card-4'>
				<header class='w3-container w3-green'>
					<h1>Answered Questions</h1>  
				</header><br>";

			while ($row=mysqli_fetch_assoc($result)) {
				echo 
				"
				<div class='w3-container'>
						<h5><b><a href='answer.php?question_id=$row[id]'>$row[title]</a><br></h5> 
						<hr>
				</div>";	
			}
			echo "</div>";
		}

	?>
	 <?php include("footer.php"); ?>

</body>
</html>