<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form{
			width: 1000px;
			margin: auto;
			border: 1px solid black;
			padding: 20px;
		}
		label{
			width: 100px;
			display: inline-block;
			/*background-color: tomato;*/
		}
		form div{
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<?php include("header.php") ?>
	<form method="post" action="question_insert.php">
		<p><b>Ask a question</b></p>
		<hr>
		<div>
			<label>Title :</label><br>
			<textarea name="title" rows="1" cols="100" required></textarea>
		</div>
		<div>
			<label>Description</label><br>
			<textarea name="description" rows="15" cols="100" required></textarea>
		</div>
		<div>
			<label>Category</label><br>
			<input type="text" name="category" required>
		</div>
		<div>
			<input type="submit" value="SUBMIT YOUR QUESTION">
		</div>
	</form>
</body>
</html>