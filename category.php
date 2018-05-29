<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		include("function.php");
		include("header.php");
		$category=$_REQUEST['category'];

		echo "$category<br>";

		$conn=connect();
		$sql="select id,title from question where category='$category'";

		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<a href='answer.php?question_id=$row[id]'>$row[title]</a><br>";	
			}
		}

		// showing all category


		$sql="select category from question";

		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			echo "<br>All category<br>";
			while ($row=mysqli_fetch_assoc($result)) {
				//echo "<a href='answer.php?question_id=$row[id]'>$row[title]</a><br>";	
				echo "<a href='category.php?category=$row[category]'>$row[category]</a><br>";
			}
		}

	?>


</body>
</html>