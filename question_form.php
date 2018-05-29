<?php 
	session_start() ;
	include("function.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

	<style type="text/css">
	 
		label{
			width: 100px;
			display: inline-block;
			/*background-color: tomato;*/
		}
		 
	</style>
</head>
<body>
	<?php include("header.php") ?>
	<div class="container">
		<br>
		<div class="col-md-12">
		<div class="jumbotron">
		<br>
			<form method="post" action="question_insert.php">
				<p><b>Ask a question</b></p>
				<hr>
				<div class="form-group">
					<label for="title">Title:</label>
					<input type="text" class="form-control" id="title" name="title">
				</div>
				<div class="form-group">
					<label>Description:</label><br>
					<textarea name="description" rows="20" cols="100" required></textarea>
				</div>
				<div class="form-group">
					<label for="category">Category:</label>
					<input list="category_names" class="form-control" name="category" required>
					<datalist id="category_names">
						<?php 
							$conn=connect();
							$res=mysqli_query($conn,"select distinct category from question");
							if(mysqli_num_rows($res)>0){
								while($row=mysqli_fetch_assoc($res)){
									echo "<option value='$row[category]'>";
									echo "$row[category]";
								}
							}
							
						?>
					</datalist>
				</div>
				<br>
				<div>
					<button type="submit" class="btn btn-success pull-right btn-block">Post</button>
				</div>
				<br>
			</form>
			</div>
		</div>
	</div>
	<script>
		CKEDITOR.replace( 'description' );
	</script>
</body>
</html>