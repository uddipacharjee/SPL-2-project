<?php session_start() ?>
<?php include("function.php");
	//$id="";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

	<style type="text/css">
	.question_view{
		border: 1px solid black;
		margin: 50px;
		padding: 25px;
	}	
	.answer_view{
		border: 1px solid black;
		margin: 50px;
		padding: 25px;
		background-color: lightblue;
	}
	.answer_box{
		border: 1px solid black;
		margin: 40px;
		padding: 20px;
	}
	</style>
</head>
<body>
	<?php include("header.php") ?>
	<div class="container">
		<br>
		<div class="col-md-12">
		 
		<br>
	<?php 
		$conn=connect();

		$id=$_REQUEST['question_id'];
		//$_REQUEST['id']=$id;
		$sql="select a.*,b.username from question a,user b where a.user_id=b.id and a.id='$id'";
		$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result)==1){
			$row=mysqli_fetch_assoc($result);
			
			$sql2="select count(id) from likeTable where question_id='$id' and liked=1";
			$result2=mysqli_query($conn,$sql2);
			$row2=mysqli_fetch_row($result2);
			$vote=$row2[0];

			echo "<div class='w3-card-4'>";
			echo "<header class='w3-container w3-green'>
			<h1>Title: $row[title]</h1> asked by <a style='color:black' href='profile.php?user_id=$row[user_id]'>$row[username]</a> at $row[time]</p>
			</header><br>";
			echo "<div class='w3-container'>
			<h5><span class='pull-right label label-large label-success'>$row[category]</span></h5> 
			<p>$row[question]</p>
			";
			echo "<hr>";
			 
			if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
				echo "<button class='btn-success' onclick='load();'><span class='glyphicon glyphicon-thumbs-up'</span>
				<b> Like </b> <span id='like' class='badge'>$vote</span></span></button>
				";
			
			}
			else{
				echo "<button class='btn-success' onclick='show();'><span class='glyphicon glyphicon-thumbs-up'</span>
				<b> Like </b> <span id='like' class='badge'>$vote</span></span></button>";
			}
			echo " 
			<hr></div></div><br><hr>";

		}
			
	?>
	 
	
<script type="text/javascript">
	function load(){

		var w=document.getElementById('like').innerHTML;
		var like=parseInt(w);

		var qid=<?php echo "$row[id]"; ?>;
		var uid=<?php echo "$_SESSION[id]"; ?>;

		//alert(qid+" "+uid);
		var xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("like").innerHTML = this.responseText;
    		}
    	};
		xhttp.open("GET", "vote.php?like="+like+"&user_id="+uid+"&question_id="+qid, true);
  		xhttp.send();

	}
	function show(){
		alert("login first");
	}
	
	
</script>
			
<?php
			

		//SELECT a.*, b.username FROM `answer` a, user b WHERE a.user_id = b.id AND a.`question_id` = 3 
		//$answer_sql="select * from answer where question_id='$id'";
		$answer_sql="select a.*, b.username from answer a,user b where a.user_id=b.id and a.question_id='$id' order by time DESC";

		$answer_res=mysqli_query($conn,$answer_sql);

		if(mysqli_num_rows($answer_res)>0){


			echo "<div class='w3-card-4'>";
			echo "<header class='w3-container w3-green'>
			<h1>Answers</h1><br></header>";

			

			while($answer_row=mysqli_fetch_assoc($answer_res)){

				echo "<div class='w3-container'>";

				$sql3="select count(id) from answerLikeTable where answer_id='$answer_row[id]' and liked=1";
				$result3=mysqli_query($conn,$sql3);
				$row3=mysqli_fetch_row($result3);
				$answer_vote=$row3[0];
			
				$aid=(string)$answer_row['id'];

				echo "<hr><p><b>$answer_row[answer]</b><span class='badge pull-right'>Answered at $answer_row[time]</span><br>
				<i>.......answered by </i>".
				     " <a style='color:red' href='profile.php?user_id=$answer_row[user_id]'>$answer_row[username]</a>
				<br><br>";
				 
				
				if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
					echo "<button class='btn-success' onclick='answer_load($answer_row[id],$answer_vote);'><span class='glyphicon glyphicon-thumbs-up'</span>
					<b> Like </b> <span id='answer_like' class='badge'>$answer_vote</span></span></button>";	
				}
				else{
					echo "<button  class='btn-success' onclick='show();'><span class='glyphicon glyphicon-thumbs-up'</span>
					<b> Like </b> <span id='answer_like' class='badge'>$answer_vote</span></span></button>";
				}
				echo "<script type=\"text/javascript\">
						function answer_load(a,l){
								
							var likes=parseInt(l);
							
							var aid=parseInt(a);
							var uid=$_SESSION[id];
							
							//alert('hello '+aid+' '+l);

							var xhttp = new XMLHttpRequest();

							xhttp.onreadystatechange = function() {
					    		if (this.readyState == 4 && this.status == 200) {
					      			document.getElementById('answer_like').innerHTML = this.responseText;
					    		}
					    	};
							xhttp.open('GET', 'answer_vote.php?likes='+likes+'&user_id='+uid+'&answer_id='+aid, true);
					  		xhttp.send();
						}
					</script>";
					echo "</div>";
			}
			 
			echo " 
			<hr></div>";


			
			
		}
	?>
	<script type="text/javascript">
		function answer_loadb(){
				
			var ww=document.getElementById('answer_like').innerHTML;
			var likes=parseInt(ww);
			

			var aid=<?php echo "$answer_row[id]"; ?>;
			var uid=<?php echo "$_SESSION[id]"; ?>;
			var qid=<?php echo "$answer_row[question_id]"; ?>;


			alert("hello "+aid+" "+uid+" "+qid);
		//	alert(aid+" "+uid);
			/*var xhttp = new XMLHttpRequest();

			xhttp.onreadystatechange = function() {
	    		if (this.readyState == 4 && this.status == 200) {
	      			document.getElementById("like").innerHTML = this.responseText;
	    		}
	    	};
			//xhttp.open("GET", "vote.php?like="+like+"&user_id="+uid+"&question_id="+qid, true);
	  		//xhttp.send();
		*/
		}
	</script>

	<?


		
	?>
 
		<br>
		<hr>
		<div class="w3-card-4">
			<header class="w3-container w3-green">
			<h2>Hit your answer</h2>
			</header>

			<div class="w3-container">
			<form method="post" action="answer_insert.php?question_id=<?php echo($id); ?>">
				
				<hr>
				<textarea name="answer" rows="20" cols="100" required></textarea><br>
				<div>
					<button type="submit" class="btn btn-success btn-block">Post</button>
				</div>
				<br>
			</form>
		</div>
 
		</div>
	 
	<script>
		CKEDITOR.replace('answer');
	</script>

</div>
</div>
</body>
</html>