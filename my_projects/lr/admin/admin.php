<?php 
session_start();
require_once("connection.php");
 ?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body align="center">
	<img src="farmlogo.jpg" height="180px" width="700px"/>
<p>
		<form method="post">
		<p>
			<label>Admin <span class="glyphicon glyphicon-user"></span>:  </label>
			<input type="Username" name ="username" placeholder="Enter your username"required/>
			<p>
			<label>Password:</label>
			<input type="Password" name="password" placeholder="Enter your password" required/>
			<p>
			
			<input type="submit" class="submit" value="login" name="login" />
		
			
		 </form>
		 
		 <?php
			if (isset($_POST['login'])){
				$username= $_POST['username'];
				$password=$_POST['password'];
				
				$q='SELECT * FROM `admin` WHERE `username` ="'.$username.'" 
					AND `password`="'.$password.'"';
					
				$r=mysqli_query($con, $q);
				
				if($r){
					
					if(mysqli_num_rows($r)>0){
						
						$_SESSION['user_name']=$username;
						header("location: alert.php");

						echo'welcome';
						
					}else{
						 echo "<script>
							alert('You are not the admin')
							</script>";
					}
					}else{
					echo $q;
					}
				}
			 
		 
		 ?>
</body>

 </html>