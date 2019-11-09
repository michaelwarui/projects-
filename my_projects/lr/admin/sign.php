<?php
session_start();
require_once("connection.php");
?>
<html>
<head>
</head>

<body align="center">
	<img src="farmlogo.jpg" height="180px" width="700px"/>

		<form method="post">
		<p>
			<label>Username:</label>
			<input type="Username" name ="username" placeholder="Enter your username"required/>
			<p>
			<label>Password:</label>
			<input type="Password" name="password" placeholder="Enter your password" required/>
			<p>
			<a href="for.php" ><small>
			Forgot password?
			</small></a>
			<p>
			<input type="submit" class="submit" value="login" name="login" />
			
			 <a href ="sign.php">
			 <button>Sign up 
			 </a>
			 </button>
		 </form>
		 
		 <?php
			if (isset($_POST['login'])){
				$username= $_POST['username'];
				$password=$_POST['password'];
				
				$q='SELECT * FROM `users` WHERE `username` ="'.$username.'" 
					AND `password`="'.$password.'"';
					
				$r=mysqli_query($con, $q);
				
				if($r){
					
					if(mysqli_num_rows($r)>0){
						
						echo'welcome';
						$_SESSION['user_name']=$username;
						header("location:users/index.php");
					
						
					}else{
						 echo "<script>
							alert('Username or password doesnot match! Have you registerd?')
							</script>";
					}
					}else{
					echo $q;
					}
				}
			 
		 
		 ?>
</body>

 </html>