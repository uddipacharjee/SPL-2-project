<?php
session_start();
?>
<?php
	include("header.php");
    include("function.php");
    $conn=connect();

	//echo "".$_SESSION['username']."<br>";
	//echo "".$_SESSION['id'];


   
    if(!empty($_POST['category'])){
        $category=mysqli_real_escape_string($conn,$_POST['category']);
    }
    
    if(!empty($_REQUEST['category'])){
		$category=$_REQUEST['category'];
	}
	
   

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
	
	<?php
		$conn=connect();


		$sql="select count(id) from question";

		$result=mysqli_query($conn,$sql);
		
		$row=mysqli_fetch_row($result);
		$total_row=$row[0];
		
		
		$row_per_page=3;

		$total_page=ceil($total_row/$row_per_page);

		if(isset($_REQUEST['current_page']) && is_numeric($_REQUEST['current_page']) ){
			$current_page=$_REQUEST['current_page'];
		}
		else $current_page=1;

		
		$offset=($current_page-1)*$row_per_page;

        $sql="select * from question 
        WHERE `category` LIKE '%".$category."%'
        order by time DESC limit $offset,$row_per_page";
		
		//$sql="select * from question order by time DESC";
		$result=mysqli_query($conn,$sql);

		 
		
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
      </form><br>
	  <div class="text-center">
	  	<div class="w3-card w3-green">
			<hr><p><h3> All Questions from "<?php echo $category;?>" Category</h3></p><hr>
		</div>
	  </div><br>
		<div class="text-center">
			<?php echo "<button type='button' class='btn btn-success pull-right'>Page No:<span class='badge'>$current_page</span></button>";?>
		</div><br>

	<?php	

		if(mysqli_num_rows($result)>0){
			
			while($row=mysqli_fetch_assoc($result)){
				 
				echo "<h1><a href='answer.php?question_id=$row[id]'>$row[title]</a></h1>";
				echo "<p><b><h4>$row[question]</b></h4></p>";

				echo 
				"
					<div>
						<div class='pull-right'>
								<span class='badge'>Posted $row[time]</span>
						</div><br>
						<h4><span class='label label-large label-success'>Category:</span>
								<a href='category.php?category=$row[category]'>$row[category]</a>
						</h4><br>
					</div><hr>";
			}
		}
		?>
		
		<ul class="pager">
		<?php
		if($current_page>2){
			echo "<li><a href='$_SERVER[PHP_SELF]?current_page=1&category=$category'>START</a>";
			
		}
		 
		if($current_page>1){
			$prev_page=$current_page-1;
            echo "<li><a href='$_SERVER[PHP_SELF]?current_page=$prev_page&category=$category'>PREV</a>";
            
			
		}
 
		if($current_page!=$total_page){
			$next_page=$current_page+1;
			echo "<li><a href='$_SERVER[PHP_SELF]?current_page=$next_page&category=$category'>NEXT</a>";
		}
		
		echo "</ul>";
		 
	?>
	 
		</ul>
		</div>
	</div>

	 <?php include("footer.php"); ?>

</body>
</html>

