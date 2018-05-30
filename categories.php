<?php
session_start();
?>
<?php
	include("header.php");
    include("function.php");
    $conn=connect();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#msg{
			background-color: white;
			border:1px solid black;
		}
	
	</style>
</head>
<body>
	
<?php
	if(!empty($_REQUEST['LoginSuccessful'])){           // from access_account.php
		echo "<p id='msg'>$_REQUEST[LoginSuccessful]</p>";
		//header("refresh:3;url=questionList.php");	
	}
	if(!empty($_REQUEST['QuestionInserted'])){
		echo "<p id='msg'> $_REQUEST[QuestionInserted]</p>";  // from   question_insert.php

	}
?>
	
	<div class="container">
		<div class="col-md-12">
			<br>
			<form method="post" action="search_question.php">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search Question by title or category.." name="search" required>
					<span class="input-group-btn">
						<button class="btn btn-success" type="submit">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</span>
				</div>
			</form>
			<br>
	  	<div class="text-center">
	  		<div class="w3-card w3-green">
				<hr><p><h3> All Categories</h3></p><hr>
			</div>
	 	 </div>
		  <br>
		

    <?php	
    
        $sql="select distinct category from question";

        $result=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)>0){
          
            echo "<div class='w3-container w3-center'>";
            while ($row=mysqli_fetch_assoc($result)) {
                //echo "<a href='answer.php?question_id=$row[id]'>$row[title]</a><br>";	
                echo "
                    <div class='w3-bar'>
                    	<button class='w3-button w3-round w3-light-green w3-block'>
							<b><a href='category.php?category=$row[category]'>$row[category]</a></b>
						</button>
                    </div>";
            }
        echo "</div>";
        }
		?>

		</div>
	</div>

	 <?php include("footer.php"); ?>

</body>
</html>

