<!DOCTYPE html>
<html lang="en">
<head>

  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <br>
      <div class="well text-center">
        <p><?php echo "<a  href='profile.php?user_id=$_SESSION[id]'>$_SESSION[username]<a>" ?></p>
        <img src="user.png" class="img-circle" height="65" width="65" alt="Avatar">
      </div>
      <div class="well">
      <div>
      <ul class="nav nav-pills nav-stacked">
        <li><a href=<?php echo "profile.php?user_id=$_SESSION[id]"?>>PROFILE</a></li>
        <li><a href="question_form.php">ASK</a></li>
		    <li><a href="questionList.php">QUESTION LIST</a></li>
		    <li><a href="about.php">ABOUT</a></li>
      </ul><br>
      </div>
      </div>
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
      
    </div>

    <div class="col-sm-9">
  