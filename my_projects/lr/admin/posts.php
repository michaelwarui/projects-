<?php
session_start();
require_once("connection.php");
?>

<html>
<head>
<link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href ="mystyle1.css">
</head>
<body>
  <div class="header">
   <img src="farmlogo.jpg" height="180px" width="700px"/>
	</div>
	<div id="navbar">
 
  <a href="1st pageadmin.php">Alert</a>
  <a href="alert.php">Post alert</a>
	<a href="2nd pageadmin.php">Forums</a>
	<a href="posts.php">Posts from users</a>
	<a href="page4admin.php">About us</a>
	
	
        <div style="text-align:right;">
	       <a class="fa fa-sign-out" aria-hidden="true" href="logout.php">log out </a>  
		   </div>
	    </div>
		
		

<div class="row" >
<div class="col-lg-6">
<div style="background-color:#aaa;">
<h2>Questions</h2>

<div onclick="document.getElementById('new-message').style.display='block'">
		<p align="center">provide responce</p>
		</div>
		<div id ="new-message">
	<p class="m-header"> responce</p>
	<p class="m-body"> 
		<form method="post">
		
		<input type="text" list="user" onkeyup="check_in_db()" placeholder="username" name="username" id="username"/>
			<datalist id= "user" ></datalist>
			<br><br>
			
		<textarea class="message_area" name="message" placeholder="write your message"required></textarea><br>
		
		<input type="submit" value="send" id="send" name="send"/>
		<button onclick="document.getElementById('new-message').style.display='none'"> cancel</button>
		</form>
	</p>
	<p class="m-footer">click send to post responce</p>
</div>

<?php

		$q1='SELECT * FROM `questions`';
		$r1=mysqli_query($con,$q1);
		if( $r1){
			while($row =mysqli_fetch_assoc($r1)){
			
				$sender_name= $row['sender_name'];
				$message= $row['question_text'];
				$date= $row['date_time'];
	
				echo'<h3>'.$sender_name.'</h3>';
				echo '<p>'.$message.'</p>';
				echo'<p>'.$date.'</p>';
				echo '<hr>';
			}
		}
?> 
</div>
</div>

<div class="col-lg-6" >
<h2>Reports</h2>

<?php

		$q1='SELECT * FROM `reports`';
		$r1=mysqli_query($con,$q1);
		if( $r1){
			while($row =mysqli_fetch_assoc($r1)){
			
				$sender_name= $row['sender_name'];
				$message= $row['report'];
				$date= $row['date_time'];
	
				
				echo'<h3>'.$sender_name.'</h3>';
				echo '<p>'.$message.'</p>';
				echo'<p>'.$date.'</p>';
				echo '<hr>';
			}
		}
?>

</div>
</div>

</body>
</html>