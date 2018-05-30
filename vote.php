<?php 
include("function.php");

$conn=connect();

$vote=$_GET['like'];
$qid=$_GET['question_id'];
$uid=$_GET['user_id'];

$sql="select * from likeTable where question_id='$qid' and user_id='$uid'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1){
	$row=mysqli_fetch_assoc($result);

	if($row['liked']==1){
		$sql="update likeTable set liked=0 where question_id='$qid' and user_id='$uid'";
		mysqli_query($conn,$sql);
	}
	else if($row['liked']==0){
		$sql="update likeTable set liked=1 where question_id='$qid' and user_id='$uid'";
		mysqli_query($conn,$sql);
	}
}
else if(mysqli_num_rows($result)==0) {
	$liked=1;
	$query="insert into likeTable(question_id,user_id,liked) values('$qid','$uid','$liked')";
	mysqli_query($conn,$query);
}

$sql="select count(id) from likeTable where question_id='$qid' and liked=1";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);

$vote=$row[0];

echo "$vote";

?>